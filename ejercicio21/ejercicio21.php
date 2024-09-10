<!DOCTYPE html>
<html>
<body>
<?php

// Función para obtener la fecha actual
function obtenerFechaActual() {
    return date("d-m-Y");
}

// Función para obtener la hora actual
function obtenerHoraActual() {
    return date("H:i:s");
}

// Función para mostrar la fecha y hora
function mostrarFechaYHora() {
    $fecha = obtenerFechaActual();
    $hora = obtenerHoraActual();

    echo "Hora de servidor<br>";
    echo "La fecha actual es: $fecha <br>";
    echo "La hora actual es: $hora";
}

// Llamada a la función para mostrar la fecha y hora
mostrarFechaYHora();

?>
</body>
</html>
