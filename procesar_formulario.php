<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$formcontent="
Nombre: $nombre \n
Correo: $correo \n
Mensaje: $mensaje
";

$recipient = "info@businessenglishwithflavia.com, flavia_drago@hotmail.com";

$subject = "Consulta via web de $nombre";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: gracias.html");

?>