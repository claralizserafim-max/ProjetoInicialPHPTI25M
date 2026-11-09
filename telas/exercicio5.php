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
    <title>Metros</title>
</head>
<body>
     <h1>Digite um número: </h1>
    <form method="POST">
        <label> Informe-o aqui!: </label>
        <input type="thisNumber" id="esseNumero" name="esseNumero"/>
        <br><br>

        <button type="submit">Raiz
    <?php
    if(isset($_POST['esseNumero'])){
        $a = $_POST['esseNumero'];

        $resultado = $funcoes->exercicio5($a);
    }
    ?>
     </button>
    </form>
    <?php
        if(isset($_POST['esseNumero'])){
            echo "O resultado é >< : " .$resultado;
        }else{
            echo "Preencha os campos >:c ";
        }

    ?>
</body>
</html>