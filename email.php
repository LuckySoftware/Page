<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  // Dirección de correo electrónico donde recibirás los datos
  $destinatario = "lucky.software.uy@gmail.com";

  // Asunto del correo
  $asunto = "Consulta Lucky Software";

  // Cuerpo del correo
  $cuerpo = "Nombre: $nombre\n";
  $cuerpo = "Email: $email\n";
  $cuerpo = "Mensaje: $mensaje\n";

  // Encabezados del correo
  $headers = "From: $email\r\n";
  $headers = "Reply-To: $email\r\n";

  // Envía el correo
  mail($destinatario, $asunto, $cuerpo, $headers);

  // Redirige al usuario después de enviar el correo
  header("Location:index.html");
}
?>
