<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp1 - BackEnd</title>
</head>
    <h1>Tp 1 - BackEnd</h1>
    <div>
        <h2>Imprima por pantalla: “Hola mundo”.</h2>
        <?php
        echo  "Hola mundo.";
        ?>
    </div>
    <div>
        <h2>Cargue en una variable la cadena de caracteres
        “Hola mundo” y luego la imprima por pantalla</h2>
        <?php
            $saludo = "Hola mundo.";
            echo $saludo;
        ?>
    </div>
    <div>
        <h2>Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.</h2>
    <?php
            $variable1 = 2;
            $variable2 = 3;

            echo "Suma = "; echo $variable1 + $variable2;
            ?><br><?php
            echo "Resta = "; echo $variable1 - $variable2;
            ?><br><?php
            echo "Multiplicación = "; echo $variable1 * $variable2;
            ?><br><?php
            echo "División = "; echo $variable1 / $variable2;
            ?><br><?php
            echo "Resto = "; echo $variable1 % $variable2;
    ?>
    </div>
    
    <div>
        <h2>Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.</h2>
    <?php
    echo "Calculando;  de Grados Centigrados a Fahrenheit";

    function centigradosAFahrenheit($centigrados)
    {
        return $centigrados * 9 / 5 + 32;
    }
    $centigrados = 50;
    $fahrenheit = centigradosAFahrenheit($centigrados);
    ?><br><?php
    echo "Los $centigrados grados centígrados equivalen a $fahrenheit grados fahrenheit";
    ?>
    </div>
<div>
    <h2>Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h2>
<?php
?><br><?php
/* Punto 5 - a */
        //Perimetro
        $base = "10";
        $altura = "8";

        $p = (2 * $base) + (2 * $altura);

        echo "El perímetro del rectángulo es: $p "; 
        ?><br><?php
        
        // Área
        $base = "10";
        $altura = "8";

        $a = ($base * $altura);

        echo "El área del rectángulo es: $a "; 

        
        ?><br><?php
        
/* Punto 5 - b */
//Perimetro
$radio = "30";
$py = "3.14";
$diametro = "2";

$p = (($radio * $py) * $diametro);

echo "El perímetro del círculo es: $p"; 
?><br><?php

//Area
$radio = "30";
$py = "3.14";

$a = (($radio * $radio) * $py);

echo "El área del círculo es: $a ";  

?>
</div>


</body>
</html>