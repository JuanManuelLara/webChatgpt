<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];
  $privacidad = isset($_POST["privacidad"]) ? "Aceptó" : "No aceptó";

  $destinatario = "jumalalore@protonmail.com"; // Cambia esto por tu dirección de correo electrónico

  $asunto = "Nuevo mensaje del formulario de contacto";
  $mensaje = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nMensaje: $mensaje\nAceptó privacidad: $privacidad";

  mail($destinatario, $asunto, $mensaje);

  header("Location: confirmacion.html");
}
?>
