<?php
    include ('conexion5.php');
    $con = conectar();

    if(isset($_REQUEST['reservacion'])){
        $Dia = $_REQUEST['dia'];
        $Nombre = $_REQUEST['nombre'];
        $Telefono = $_REQUEST['telefono'];
        $Personas = $_REQUEST['personas'];
        $Email = $_REQUEST['email'];
        $Hora = $_REQUEST['hora'];
        $Evento = $_REQUEST['evento'];
        
        $dato = mysqli_query($con, "INSERT INTO datos (dia, nombre, telefono, personas, email, hora, evento) VALUES('$Dia', '$Nombre', '$Telefono', '$Personas', '$Email', '$Hora', '$Evento')");

        if (!$dato){
            echo ("No se insertaron los datos <br>");
        }else {
            echo ("Se insertaron los datos exitosamente <br><br>");
        }
     }

    
?>