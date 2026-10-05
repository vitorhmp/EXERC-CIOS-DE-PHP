<?php
$num1 = $_POST ["numero1"];
$num2 = $_POST ["numero2"];


var_dump($num1);
var_dump($num2);

$soma = $num1 + $num2;

var_dump($soma);
print "a soma dos dois números são: " . $soma;
?>