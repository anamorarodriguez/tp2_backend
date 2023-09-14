<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TP 2 BACKEND</h1>

<?php 
    $n=5;
    $x=1;

//1
    if ($n>0) {
        echo "n es un numero positivo";
        echo "<br>";
    }
//2
    if ($n>1 & $n<10) {
        echo "n es un numero mayor a 1 y menor a 10";
        echo "<br>";
    }
//3
    if ($n>10) {
        echo "n es un numero mayor a 10";
        echo "<br>";
    } else ($n<2) {
        echo "n es un numero menor a 2";
        echo "<br>";
    }
//4
    $numero1=10;
    $numero2=5;
    if ($numero1>$numero2) {
        echo $numero1+$numero2;
        echo"<br>";
        echo $numero1-$numero2;
        echo "<br>";
    } elseif ($numero2>$numero1) {
        echo $numero2*$numero1;
        echo"<br>";
        echo $numero2/$numero1;
        echo "<br>";
        echo $numero2%$numero1;
        echo "<br>";
    } else {
        echo "los números ingresados son iguales";
        echo "<br>";
    }
?>
</body>
</html>