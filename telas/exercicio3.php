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
    <title>Média</title>
</head>
<body>
    <h1>Digite três números: </h1>
    <form method="POST">
        <label>Informe o primeiro número aqui: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

         <label>Informe o segundo número aqui:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

         <label>Informe o terceiro número aqui:</label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Média total
        <?php
            if(isset($_POST['primeiroNumero'])){
                $a = $_POST['primeiroNumero'];
                $b = $_POST['segundoNumero'];
                $c = $_POST['terceiroNumero'];

                $resultado = $funcoes->exercicio3($a,$b,$c);
            }
        ?>
        </button>
    </form>
    <?php
          if(isset($_POST['primeiroNumero'])){
            echo "O resultado é ><: " .$resultado;
          }else{
            echo "Preencha os campos >:c";
        }
    ?>
</body>
</html>
