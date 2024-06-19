<?php
echo "My first PHP script!";
echo "<br>";
echo "Mis datos:";
$nombre = "Carlos Hidalgo";
$edad = 18;
$estatura = 1.73;
echo "<br>";
echo "Soy ..." . strtoupper($nombre) . " tengo " . $edad . " años y mido " . $estatura . " metros";
echo "<br>";
echo "<br>";
$x = 34;
$y = 356.78;
$z = $x+$y;
$w = $x-$y;
$t = $x*$y;
$n = $x/$y;
echo "La suma es $x + $y = $z <br>";
echo "La resta es $x - $y = $w <br>";
echo "La multiplicacion es $x * $y = $t <br>";
echo "La division es $x / $y = $n <br>";
echo "La raiz cuadrada de 81 es:  "; 
echo(sqrt(81) . "<br>");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas PHP</title>
</head>
<body>
    Hola!
</body>
</html>