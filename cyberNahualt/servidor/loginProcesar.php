<?php

 session_start();
 include "conexion.php";
 $conexion = conexion();
 
 $email=$_POST['email'];
 $password=sha1($_POST['password']);

 $sql= "SELECT * FROM t_usuarios WHERE email = '$email' AND password = '$password'";

 $respuesta = mysqli_query($conexion,$sql);
 
 if(mysqli_num_rows($respuesta) > 0){
   $_SESSION ['email']= "$email";
   
   header("location:../inicio.php");

 }else{
   echo "no se puedo hacer login";
 }


?>