<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "correo";
    $to = "cebjoseantoniodominguez2002@gmail.com";
    $message = "mensaje";
    $headers = "From:" . $from;
    mail($to,$message, $headers);
    echo "Tu mensaje a sido enviado";
?>
