<?php

// $edades = array(
//     "Carlos" =>18,
//     "mr.michi" => 18,
//     "Juan" =>40,
// );

// echo "La edad de Mr.michi es " . $edades["mr.michi"];

// echo "\n";

$cafes = array (
    "capuchino" =>50,
    "Latte" =>20,
    "Americano" =>80
);

echo "El precio del cafe Americano : {$cafes["Americano"]}";
echo "\n"; 

$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),
    "Mr.michi" => array(
        "edad" => 18,
        "apellido" => "michisancio"
    )
);
echo "La persona Apeliida : " . $personas["Mr.michi"]["apellido"] . "y su edad:" . $personas["Mr.michi"]["edad"];
echo "\n"; 