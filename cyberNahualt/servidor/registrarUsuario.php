<?php
   
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    include "conexion.php";
    $conexion = conexion();


    $sql = "INSERT INTO t_usuarios (
                                    nombre,
                                    apellidos,
                                    email,
                                    password) 
            VALUES ('$nombre', 
                    '$apellidos', 
                    '$email',
                    '$password')";

    $respuesta = mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo registrar";
    }


?>