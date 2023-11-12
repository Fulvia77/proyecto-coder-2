if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "info@businessenglishwithflavia.com";

    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    mail($destinatario, "Nuevo mensaje de contacto", $cuerpoMensaje);

// Redireccionar o mostrar un mensaje de éxito
header("Location: gracias.html");
exit();
}
?>