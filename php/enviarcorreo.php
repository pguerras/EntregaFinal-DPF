<?php
/* Correo de prueba */
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
    $from = "pguerrasotelo@gmail.com";
    $to = "pguerrasotelo@gmail.com";
    $subject = "Digital Factory - Prueba Envio de Correos";
    $message = "Estamos provando envio de correos";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);

    echo "El correo ha sido enviado.";

    header("Location:index.html");
?>