<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $mensaje = $_POST["subject"];

    // Configura los encabezados del correo
    $to = "fuegoycarnesadomicilio@gmail.com"; // Cambia esto al correo del destinatario
    $subject = "Mensaje desde formulario de contacto";
    $headers = "From: $nombre <$email>";

    // Envía el correo
    $enviado = mail($to, $subject, $mensaje, $headers);

    if ($enviado) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.";
    }
}
?>