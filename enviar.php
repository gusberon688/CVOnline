<?php

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "su_correo@gmail.com";
$asunto = "Contacto desde nuestra web";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";

//$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>