<?php
if (isset($_GET["enviar_btn"])) {
    echo "Los datos los enviaste por el método GET. Los datos son: <br><br>";
    echo "El nombre es: " . htmlspecialchars($_GET["nombre_txt"]) . "<br/>";
    echo "El password es: " . htmlspecialchars($_GET["password_txt"]);
} elseif (isset($_POST["enviar_btn"])) {
    echo "Los datos los enviaste por el método POST. Los datos son: <br><br>";
    echo "El nombre es: " . htmlspecialchars($_POST["nombre_txt"]) . "<br/>";
    echo "El password es: " . htmlspecialchars($_POST["password_txt"]);
}
?>