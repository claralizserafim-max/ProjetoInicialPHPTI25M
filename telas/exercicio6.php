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
    <title>Area</title>
</head>
<body>
     <h1>Digite um número: </h1>
    <form method="POST">
        <label> Informe-o aqui!: </label>
        <input type="number" id="raio" name="raio"/>
        <br><br>

        <button type="submit">Área
    <?php
        if(isset($_POST['raio'])){
        $a = $_POST['raio'];

        $resultado = $funcoes->exercicio6($a);
    }
    ?>
     </button>
    </form>
    <?php
        if(isset($_POST['raio'])){
            echo "O resultado é >< : " .$resultado;
        }else{
            echo "Preencha os campos >:c ";
        }
    ?>
</body>
</html>