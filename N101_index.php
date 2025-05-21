<?php

include "classes\N101_Animal.php";
include "classes\N101_Perro.php";
include "classes\N101_Gato.php";

$gatoUno = new Gato("Pedro");
$perroUno = new Perro("Jacinto");
echo $gatoUno->getNombre()." dice: ";
$gatoUno->makeSound();
echo "<br>". $perroUno->getNombre()." dice: ";
$perroUno->makeSound();
