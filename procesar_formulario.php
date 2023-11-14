<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$formcontent="
Nombre: $nombre \n
Correo: $correo \n
Mensaje: $mensaje
";

$recipient = "info@businessenglishwithflavia.com";

$subject = "Consulta via web de $nombre";

$header = "From: $correo \r\n";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: ./pages/gracias.html");

?>