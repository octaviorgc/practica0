<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <select name="zona_horaria">
            <option value= "America/Lima">Lima, Perú</option>
            <option value= "America/New_York">Nueva York, Estados Unidos</option>
            <option value= "Europe/London">Londres, Reino Unido</option>
            <option value= "America/Mexico_City">Ciudad de México, México</option>
            <option value= "Asia/Tokyo">Tokio, Japón</option>
            <option value= "Africa/Cairo">El Cairo, Egipto</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
<?php
//funciones para verificar la zona horaria
function verificarZonaHoraria($zona_horaria){
    return in_array($zona_horaria, timezone_identifiers_list());

}

function mostrarFechaYHora($zona_horaria) {
    date_default_timezone_set($zona_horaria);

    $fecha= date("d-m-Y");
    $hora = date("H:i:s");

    echo "Hora de $zona_horaria<br>";
    echo "La fecha actual es: $fecha <br>";
    echo "La hora actual es: $hora";

}
 if(isset($_POST["zona_horaria"])){
    $zona_horaria = $_POST["zona_horaria"];

}

$validar = verificarZonaHoraria($zona_horaria);

if ($validar){
    mostrarFechaYHora($zona_horaria);

}

else{
    echo "no se encontro,la zona horaria";
}








?>






</html>