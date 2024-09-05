<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha">
        <input type="submit" value="Comprobar">
    </form>
</body>
<?php

if (isset($_POST["fecha"])) 
{
    $fecha = $_POST["fecha"];

    // Convertir la fecha a un objeto DateTime
    $fecha_objeto = new DateTime($fecha);

    // Obtener el mes de la fecha
    $mes = $fecha_objeto->format("m");

    // Comprobar si la fecha es verano
    if ($mes >= 6 && $mes <= 9) {
        echo "Es verano";
    } else {
        echo "No es verano";
    }
}

?>
</html>