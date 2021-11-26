<?php
    function conectar(){
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = 'reservas';

    $con = mysqli_connect( $server, $user, $pass)
    or die('No se pude conectar' . mysql_error());
    echo("conexion exitosa  <br>");

    mysqli_select_db($con,$bd)
    or die('no se pudo conectar con la base de datos' . mysqli_error());
    return $con;
    echo('conexion de base de datos exitosa');
    }
?>
