<?php
/* Ejercicio 1: */
echo "Hola mundo!";

echo"<br>";
echo"<br>";

/*Ejercicio 2: */
echo "Hola mundo!";

echo"<br>";

$variable = "2";
echo $variable;

echo"<br>";
echo"<br>";

/*Ejercicio 3: */

$numero1 = 8;
$numero2 = 2;

//SUMA
echo $numero1 + $numero2;
echo"<br>";
//RESTA
echo $numero1 - $numero2;
echo"<br>";
//MULTIPLICACION
echo $numero1 * $numero2;
echo"<br>";
//DIVISION
echo $numero1 / $numero2;
echo"<br>";
//RESTO
echo $numero1 % $numero2;

echo"<br>";
echo"<br>";

/*Ejercicio 4: */

$numero1 = 20; //Grados Celsius
$numero2 = 32; //Parte de la formula
$numero3 = 1.8; //Parte de la formula
$numero4 = $numero1 * $numero3;
echo $numero4 + $numero2;

echo"<br>";
echo"<br>";

/*Ejercicio 5: */
//RECTANGULO
$numero1 = 18; //base
$numero2 = 12; //altura
//Area del rectangulo (base*altura)
echo $numero1 * $numero2; 
echo"<br>";
//Perimetro del rectangulo (lado1*2 + lado2*2)
$numero3 = $numero1 * 2; //lado1 *2
$numero4 = $numero2 *2; //lado2 *2
echo $numero3 + $numero4; //Resultado del perimetro
echo"<br>";
//CIRCULO
$numero1 = 30; //Radio
$exponente = 2;
$pi = 3.14;
$numero2 = 2; //parte de la formula
//Area del circulo (3.14 * r2)
$potencia = pow($numero1, $exponente); //potencia
echo $pi* $potencia; //Resultado area 
echo"<br>";
//Perimetro del circulo (3.14*2*r)
echo $pi * $numero2 * $numero1;


?>