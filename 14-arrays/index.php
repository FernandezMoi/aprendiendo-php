<?php

/*
Un array es una colección o conjunto de datos bajo un único nombre.
Para acceder a los valores se puede usar un índice (número o alfanumérico)

*/

$pelicula = "Batman";
$peliculas = array('Batman', 'Flash', 'Thor');
$cantantes = ['2pac', 'Eminem', 'Blake'];

echo $peliculas[2];
echo "<br/>";
echo $cantantes[1];

//Recorrer con for
echo "<h1>Listado de películas</h1>";
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>$peliculas[$i]</li>";
}
echo "</ul>";
