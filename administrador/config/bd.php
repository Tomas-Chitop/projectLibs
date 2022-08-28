<?php

//VARIABLES DE LA BASE DE DATOS
$host = "localhost";
$bd = "sitio";
$usuario = "root";
$contrasenia = "";

try {
    $conexion =  new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>