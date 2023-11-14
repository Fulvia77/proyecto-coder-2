<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$formcontent = 
    "<html>".
	    "<head><title>Nuevo Contacto</title></head>".
	    "<body>".
            "<p><strong>Nombre:</strong> $nombre</p>".
            "<p><strong>Correo:</strong> $correo</p>".
            "<p><strong>Mensaje:</strong> $mensaje</p>".
	    "</body>".
	'</html>';

$recipient = "info@businessenglishwithflavia.com";

$subject = "Consulta via web de $nombre";
$header = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$header .= "From: $recipient \r\n";
$header .= "Reply-To: ".$correo."\r\n";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: ./pages/gracias.html");

?>