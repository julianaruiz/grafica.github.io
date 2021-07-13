<?php

include_once 'DB.php';
$db = new DB();
$conexion = $db->connection();


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tema = $_POST['tema'];
$mensaje = $_POST['mensaje'];

$cargar_mensaje = "INSERT INTO mensaje (nombre, email, tema, mensaje) VALUE (
                                    '" . $nombre . "',
                                    '" . $email . "',
                                    '" . $tema . "',
                                    '" . $mensaje . "')";

echo mysqli_query($conexion, $cargar_mensaje);


mysqli_close($conexion);
