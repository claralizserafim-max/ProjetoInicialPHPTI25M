<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto com desconto</title>
</head>
<body>
     <h1>Digite o valor: </h1>
    <form method="POST">
        <label> Informe-o aqui!: </label>
        <input type="number" id="produto" name="produto"/>
        <br><br>

        <button type="submit">Calcular porcentagem
        <?php
            if(isset($_POST['produto'])){
            $a = $_POST['produto'];
            
            $resultado = $funcoes->exercicio8($a);
        }
    ?>
     </button>
    </form>
    <?php
        if(isset($_POST['produto'])){
            echo "O resultado é >< : " .$resultado;
        }else{
            echo "Preencha os campos >:c ";
        }
    ?>
</body>
</html>