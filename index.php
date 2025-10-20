<?php
echo "Ejercicio 1";
echo "<br>";
$nombre = "Carlos"; 
$edad   = 21;       
echo $nombre . " tiene " . $edad . " años.";

//Ejercicio 2
echo "<br>";
echo "<br>";
echo "Ejercicio 2";
echo "<br>";
$num1 = 8;   
$num2 = 2;   

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$divisionText = "";
if ($num2 != 0) {
    $division = $num1 / $num2;
    $divisionTexto = $division;
} else {
    $divisionText= "Error: división por cero";
}

echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
//Ejercicio 3
echo "<br>";
echo "<br>";
echo "Ejercicio 3";
echo "<br>";
$radio = 5; 
$area = M_PI * $radio * $radio;
echo "Radio: " . $radio . "<br>";
echo "Área: " . $area . "<br>";

echo "Área (solo 2 decimales): " . number_format($area, 2) . " unidades cuadradas.<br>";

//Ejercicio 4
echo "<br>";
echo "<br>";
echo "Ejercicio 4";
echo "<br>";
$nombre = "Juan";
$apellido = "Pérez";

echo '<strong>' . $nombre . ' ' . $apellido . '</strong>';

//Ejercicio 5
echo "<br>";
echo "<br>";
echo "Ejercicio 5";
echo "<br>";
$nota1 = 8.5;
$nota2 = 9.2;
$nota3 = 7.0;

$promedio = ($nota1 + $nota2 + $nota3) / 3;

$promedio_format = number_format($promedio, 2);

if ($promedio >= 9) {
    $mensaje = "Aprobado con Distinción";
} elseif ($promedio >= 6) { 
    $mensaje = "Aprobado";
} else {
    $mensaje = "Reprobado";
}

echo "Notas: " . $nota1 . ", " . $nota2 . ", " . $nota3 . "<br>";
echo "Promedio: " . $promedio_format . "<br>";
echo "<strong>" . $mensaje . "</strong>";

echo "<br>";
echo "<br>";
echo "Ejercicio 6";
echo "<br>";
echo "<br>";
for ($fila = 1; $fila <= 5; $fila++) {          
    for ($columna = 1; $columna <= 5; $columna++) { 
        echo "* "; 
    }
    echo "<br>"; 
}
?>
<?php

$inventario = array(
    "Leche" => 15,
    "Pan" => 30,
    "Huevos" => 8,
    "Queso" => 5,
    "Yogur" => 20,
    "Jamón" => 3,
    "Cereal" => 12,
    "Agua" => 25
);
echo "<br>";
echo "<br>";
echo "Ejercicio 7";
echo "<br>";
echo "<br>";
$texto = "Programación en PHP es muy divertida";
$contadorVocales = 0;

echo "Contando vocales en: \"$texto\"\n";

for ($i = 0; $i < strlen($texto); $i++) {
    $letra = $texto[$i];

    switch ($letra) {
        case 'a':
        case 'A':
        case 'e':
        case 'E':
        case 'i':
        case 'I':
        case 'o':
        case 'O':
        case 'u':
        case 'U':
            $contadorVocales++;
            break;
    }
}
echo "<br>";
echo "La frase contiene $contadorVocales vocales";
echo "<br>";
echo "<br>";
echo "Ejercicio 8";
echo "<br>";
echo "<br>";
echo "Inventario de productos:\n";
echo "<br>";
echo "=======================\n";
echo "<br>";
foreach ($inventario as $producto => $stock) {
    echo "$producto: $stock unidades";

    if ($stock <= 10) {
        echo " - ALERTA: Stock bajo";
    }

    echo "<br>";
}

//ejercicios 9
echo "<br>";
echo "<br>";
echo "Ejercicio 9";
$num1 = 0;
$num2 = 1;
$contador = 1;
echo "<br>";
echo "Los primeros 10 números de la Serie de Fibonacci:";
echo "<br>";
while ($contador <= 10) {
    echo "$num1";

    if ($contador < 10) {
        echo ", ";
    }

    $siguiente = $num1 + $num2;
    $num1 = $num2;
    $num2 = $siguiente;
    $contador++;
}
echo "<br>";
?>

<?php
echo "<br>";
echo "<br>";
echo "Ejercicio 10";
$numero = 7;
$multiplicador = 1;

echo "Tabla de multiplicar del $numero:";
echo "<br>";

while ($multiplicador <= 10) {
    $resultado = $numero * $multiplicador;
    echo "$numero X $multiplicador = $resultado";
    echo "<br>";
    $multiplicador++;
}
?>

