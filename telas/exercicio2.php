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
    <title>Dobrar</title>
</head>
<body>
    <h1>Digite um número: </h1>
    <form method="POST">
        <label> Informe-o aqui!: </label>
        <input type="uniqueNumber" id="unicoNumero" name="unicoNumero"/>
        <br><br>

    <button type="submit">Dobrar
    <?php
    if(isset($_POST['unicoNumero'])){
        $a = $_POST['unicoNumero'];

        $resultado = $funcoes->exercicio2($a);
    }
    ?>
     </button>
    </form>
    <?php
        if(isset($_POST['unicoNumero'])){
            echo "O resultado é >< : " .$resultado;
        }else{
            echo "Preencha os campos >:c ";
        }

    ?>
</body>
</html>