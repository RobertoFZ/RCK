<?php
//if "email" variable is filled out, send email
if (isset($_POST['correo'])) {

    //Email information
    $subject = "CONTACTO RCK: " . $_POST['rol'];
    $admin_email = "gruporckgames@gmail.com"; //gruporckgames@gmail.com
    $email = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $rol = $_POST['rol'];
    $mensaje = $_POST['mensaje'];

    $pre_msg = "Nombre: " . $nombre . " " . $rol . "\n" . "Correo: " . $email;
    $complete_msg = $pre_msg . "\n" . "Mensaje: \n" . $mensaje;

    //send email
    mail($admin_email, "$subject", $complete_msg, "From:" . $email);

    //Email response
    //header("Location: /RCK/index.php?enviado=1");
    echo "1";
} else {
    header("Location: /RCK/index.php");
}
?>