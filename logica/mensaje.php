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

/*
if (isset($_POST['enviar'])){
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['tema']) && !empty($_POST['mensaje'])){
        $name = $_POST['nombre'];
        $emailUsuario = $_POST['email'];
        $asunto = $_POST['tema'];
        $mensaje = $_POST['mensaje'];
        $email = "julianaruiz152@gmail.com";
        $header = "From: ".$emailUsuario."\r\n";
        $header.= "Reply-To: ".$email."\r\n";
        $header.= "X-Mailer: PHP/".phpversion();
        $mail = mail($email, $asunto, $mensaje, $header);

    }
}

*/

?>
