<?php
echo "\n" . 'Variables';
$nombre = "Deyber";
$nombre2 = "Erickson";
$Apellido = "Rodriguez";
$Apellido1 = "Alvarez";
echo $nombre . "\n" . $Apellido;
echo "\n" . 'Constantes';
#CONSTANTES
define("NUMERO_PI",3.14);
echo NUMERO_PI;

#ARRAY
echo "\n" . 'Debugger';
$vocales_array = array("a","b","c","d","e","f") ;
var_dump($vocales_array); #Mas información
echo "___";
print_r($vocales_array); #Mas ordenado, menos datos


#Tipos
echo "\n" . 'Tipos';
$datos_array = array("_integer","_float","_double","_char","_string","_bool","_null","_Undefined");
print_r($datos_array);

#casting
echo "\n" . 'Casting';
$numerito = '5';
var_dump($numerito);
$numerito = (int) $numerito;
var_dump($numerito);

$dias = 5.89;
var_dump($dias);
$dias = (int) $dias;
var_dump($dias);
