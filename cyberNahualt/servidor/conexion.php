<?php

function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "cybernahualt";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    return $conexion;
}