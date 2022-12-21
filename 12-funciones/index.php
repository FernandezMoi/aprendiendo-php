<?php
/*
 FUNCIONES:
    Una función es un conjunto de instrucciones agrupadas bajo un nombre
    concreto y que puedan reutilizarse solamente invocando a la funciój tantas veces
    como se quiera.

    Function nombreFuncion($parametro){
        Bloque instrucciones
    }
    
    nombreFuncion($el_parametro);
 */

//Ejemplo 1
function mostrarMiNombre()
{
    echo "Mi nombre Prueba<br>";
    echo "Mi nombre Prueba 2<br>";
    echo "Mi nombre Prueba 3<br>";
    echo "Mi nombre Prueba 4<br>";
}
//Llamar función
mostrarMiNombre();

echo "<br>";
//Ejemplo 2

function tabla($numero)
{
    for ($i = 1; $i <= 10; $i++) {
        $result = $i * $numero;
        echo "$result<br>";
    }
}
?>
<form action="" method="GET">
    <p>
        <label for="num1">Enviar numero 1:</label>
        <input type="text" name="num1" />
    </p>
    <p>
        <label for="num2">Enviar numero 2:</label>
        <input type="text" name="num2" />
    </p>

    <input type="submit" value="enviar">
</form>

<?php
//Ejemplo 3

function calculadora($num1, $num2, $negrita = false)
{
    if ($negrita) {
        echo "<h1>";
    }
    //conjunto de instrucciones
    $sum = $num1 + $num2;
    $resta = $num1 - $num2;
    $prod = $num1 * $num2;
    $cociente = $num1 / $num2;
    echo "Suma: $sum <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $prod <br>";
    echo "División: $cociente <br>";
    if ($negrita) {
        echo "</h1>";
    }
}

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    calculadora($_GET['num1'], $_GET['num2']);
} else {
    calculadora(35, 28, true);
}
