<!DOCTYPE html>
<html>
<body>

<?php
//zona horaria
date_default_timezone_set("America/Caracas");

function obtenerFecha() {
    return date("d-m-Y");
}

function obtenerHora() {
    return date("H:i:s");
}

//llamado a las funciones

$fecha = obtenerFecha();
$hora = obtenerHora();

//impresion
echo "Hora de America/Caracas<br>";
echo "La fecha actual es $fecha <br>";
echo "La hora actual es: $hora";
?>
</body>











</html>