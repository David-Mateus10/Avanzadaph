<?php
$nombre = "Ana"; //string
$apellido = "Gomez"; // string
echo $nombre . " " . $apellido . "<br>";
echo "$nombre $apellido <br>";
echo '$nombre $apellido <br>';
$edad = 32; // int
$promedio = 3.5; // float
$mayorEdad = true; //false bool
$ejemplo = null;

$numeros = array(1, 2, 3, 4, 5, 6);
$numeros = [1, 2, 3, 4, 5, 6, ];
$lista = ["a", 12, 12.3, true, null, []];
echo $numeros[0] ."". $numeros[1] ."<br>";

$persona = [
    "nombre"=>"Juan",
    "apellido"=>"Perez",
    "edad" => 25,
    "numeros" => [2, 4, 6, 8]
];
echo $persona["nombre"] . '<br>';

define(constant_name: 'TITULO', value: 'Hola php');
echo TITULO .'<br>';

const SUB_TITULO = 'Sub titulo';
echo SUB_TITULO . '<br>';

?>