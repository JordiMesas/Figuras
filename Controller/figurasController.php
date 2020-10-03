<?php
include '../Model/rectangulo.php';
include '../Model/triangulo.php';

// rectangulo 

$rectangulo = new Rectangulo(2,3);
echo "{$rectangulo->getBase()} <br>";
echo "{$rectangulo->getAltura()}<br>";
$rectangulo->setAltura(2);
echo "{$rectangulo->getAltura()}<br>";
//ho agafa del fill rectangulo.php
$rectangulo->area();
//ho agafa del pare figuras
$rectangulo->perimetro();