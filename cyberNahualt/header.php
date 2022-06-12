<!doctype html>
<html lang="en">
    <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="public/fontawesome/css/all.css">
    <link rel="stylesheet" href="public/fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Josefin+Sans:wght@300&family=Montserrat:wght@500&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Tangerine:wght@700&family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
    
    </head>
    <body style="overflow-x: hidden;">
    
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top fixed-top">
            <img src="public/img/logo.jpg" width="100" height="50" alt="">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        CyberNahual
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="quienesSomos.php"> ¿Quienes somos?
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="profesores.php">Profesores</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="cursos.php">Cursos</a>
                            </li>
                            <li class="nav-item active">
                                <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPersona">
                                    Ingresar
                                </span>
                            </li>
                            <li class="nav-item active">
                                <span class="btn btn-warning" data-toggle="modal" data-target="#modalRegistrar">
                                    Registrar
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <?php
        include "login/modalingresar.php";
        include "login/modalRegistrar.php";
        ?>
        <script src="public/js/login.js"></script>

    