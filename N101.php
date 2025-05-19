<?php

abstract class Animal
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    abstract public function makeSound();
}

class Perro extends Animal
{
    public function makeSound()
    {
        echo "Guau guaaaauuu guau!";
    }
}

class Gato extends Animal
{
    public function makeSound()
    {
        echo "Miau miau";
    }
}

/* Prueba de clases y método makeSound()
$gatoUno = new Gato("Pedro");
$perroUno = new Perro("Jacinto");
$gatoUno->makeSound();
echo "<br>";
$perroUno->makeSound();
?>
*/

?>
