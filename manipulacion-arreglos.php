<?php

$edades  =[18, 22, 40, 34];

// COUNT
echo count($edades);
echo "\n";

// ARRAY_PUSH
array_push($edades, 13);
var_dump($edades);

// IS_ARRAY
$esto_noes_arreglo = "xd";
var_dump(is_array($edades));

// ESPLODE
$lista_frutas = "fresas,cereza,manzana";
$lista_frutas_array = explode(",",  $lista_frutas);
var_dump($lista_frutas_array);

// IMPLODE
$lista_verduras_array = ["lechuga", "cebolla", "zanahoria"];
$verduras_no_array = implode(";",$lista_verduras_array);
var_dump($verduras_no_array);
echo "\n";