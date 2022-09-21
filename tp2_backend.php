<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
    <!--Relaciono con CSS-->
    <link rel="stylesheet" href="css/estilos.css"
</head>
<body>
<h1>tp2_backend</h1>
<h2> Consigna 1</h2>
<?php
echo "Crear una variable n y validar que sea un número positivo.";
$num = 0;
    if ($num>0){
        echo'Es un número Positivo';
    }
?>
<br></br>
<?php
$num = 1;
    if ($num>0){
        echo'Es un número Positivo';
    }
?>
<br></br>
<h2> Consigna 2</h2>
<?php
echo "Crear una variable n y validar que sea un número mayor a 1 y menor a 10.";
$n = 0;
if ($n>1 && $n<10) {
  echo "El número es mayor a 1 y menor a 10";
  }
?>
<br></br>
<?php
$n = 5;
if ($n>1 && $n<10) {
  echo "El número es mayor a 1 y menor a 10";
  }
?>
<br></br>
<h2> Consigna 3</h2>
<?php
echo "Crear una variable n y validar que sea un número mayor a 10 o menor a 2.";
$n = 0;
if ($n>10 or $n<2) {
  echo ("El número no cumple con los requisitos");
  }
?>
<br></br>
<?php
$n = 5;
if ($n>10 or $n<2) {
  echo "El número es Mayor a 10 o es menor a 2";
  }
?>
<br></br>

<h2> Consigna 4</h2>
<?php
echo "Crear dos variables, una con nombre numero1 y otra con el nombre de numero2.
Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación,
la división entera y el resto de la división. Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales";
$numero1 = 4;
$numero2 = 8;
//Prueba de escritorio realizada con varios numeros al azar
if ($numero1>$numero2) {
  print  "<p>Suma: $numero1 + $numero2 =" .($numero1 + $numero2). "</p>\n";
  print  "<p>Resta: $numero1 - $numero2 =" .($numero1 - $numero2). "</p>\n";
} elseif ($numero1<$numero2) {
    print  "<p>multiplicación: $numero1 * $numero2 =" .($numero1 * $numero2). "</p>\n";
    print  "<p>división: $numero1 / $numero2 =" .($numero1 / $numero2). "</p>\n";
    print  "<p>resto: $numero1 % $numero2 =" .($numero1 % $numero2). "</p>\n";
} elseif ($numero1==$numero2) {
    print "<p>los números ingresados son iguales</p>\n";
  }
?>
</body>
</html>
