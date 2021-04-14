<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$nombre = $_POST['nombre'];
 
//Datos para el correo
$destinatario = "luis_149@live.com";
$asunto = "Contacto de ItForYou";

$carta = "De: "+$nombre+" \n";
$carta .= "Correo: "+$correo+" \n";
$carta .= "Telfono: "+$telefono+"\n";
$carta .= "Mensaje: "+$mensaje;

//Enviando un mensaje
mail($destinatario, $asunto, $carta);
header("location:emailsend.php");
?>