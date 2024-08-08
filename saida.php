<?php

    if($_GET)
    {

    //include "cliente.class.php";
    //include_once "cliente.class.php";
    //require "cliente.class.php";
    require_once "cliente.class.php";

    $cliente1= new cliente();          
    $cliente1->nome = $_GET["nome"];
    $cliente1->cpf = $_GET["cpf"];


    echo"<pre>";
    var_dump($cliente1);
    echo "</pre>";

    $cliente1->inserir_cliente();

    
    //include "cliente.class.php";
    //echo "<br> O seu nome é " . $_GET["nome"] . "<br><br>";
    //echo "O seu CFP é {$_GET["cpf"]}<br>";
  
    }else{
        header("location:entrada.php");
        die();
    };

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira aula PHP</title>
    <script>
        var numero = Math.random("2");
        function mostrarNumero() {
            var numeroFormatado = numero.toFixed(2);
            document.getElementById('numero').innerText = 'O número é ' + numeroFormatado;
        }
        window.onload = mostrarNumero;
    </script>
</head>
<body>
    <p id="numero"></p>
    <button onclick="window.history.back();">Voltar</button>
</body>
</html>
