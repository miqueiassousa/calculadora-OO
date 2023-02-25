<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1 class="">CALCULADORA OO</h1>
    <hr>
    <form method="POST">
        <label>Valor 1</label>
        <input type="text" class="" name="valor1">
        </br>
        </br>

        <select name="operacao">

            <option class="select"> Escolha a operação</option>
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">/</option>
            <option value="4">*</option>

        </select>
</br>
</br>

        <label>Valor 2</label>
        <input type="text" class="" name="valor2">
        </br>
        </br>


        <input type="submit" value="Total" />
        </br>
        </br>
</body>

</html>

<?php
require 'calculadora.php';

$n1 = $_POST['valor1'];
$n2 = $_POST['valor2'];
$op = $_POST['operacao'];


$calc = new Calculadora();

if ($op === "1") {
    $calc->somar($n1, $n2);
} else if ($op === "2") {
    $calc->subtrair($n1, $n2);
}else if($op === "3") { 
    $calc->dividir($n1, $n2);
} else if($op === "4") {
    $calc->multiplicar($n1, $n2);
} ;

/* else {
    die("Não foi informado uma operação valida");
}; */

echo "Total: " . $calc->total();
exit;

/* $calc->clear(); */



?>