<?php
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $comment = $_POST['comment'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';

    $mysqli = new mysqli($host, $user, $pass, 'usuario');

    // Prueba de coneccion
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $insertdata=" INSERT INTO usuarios(Cedula, Nombre, Password, Correo, tipo, Comentarios) VALUES( '$cedula','$nombre','$pass','$email','$type','$comment' ) ";
        // Perform query
    if ($result = $mysqli -> query($insertdata)) {
        echo "Datos Guardados con exito";
    }

    
    $mysqli -> close();
?>