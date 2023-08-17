<?php
//DECLARAMOS VARIABLES Y CONECTAMOS CON INPUTS// 
$nombre = $_POST ['nombre'];
$telefono = $_POST ['telefono'];
$email = $_POST ['email'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['textarea'];

// CUERPO DE MENSAJE QUE RECIBIMOS.//

$mensaje = "Mensaje enviado por " . $nombre . "\r\n";
$mensaje = "Telefono " . $telefono . "\r\n";
$mensaje = "Email " . $email . "\r\n";
$mensaje = "Asunto " . $asunto . "\r\n";
$mensaje = "Mensaje: " . $_POST ["textarea"] . "\r\n";
$mensaje = "Enviado el " . date('d/m/Y' , time());


$para = "guille.fer79@hotmail.com"; //EMAIL DONDE LLEGAN LOS MSJ
$tema = "Este mensaje fue enviado desde el menu de contacto en el portfolio";//ASUNTO DE MENSAJE.


//FUNCION MAIL PREDEFINIDA POR PHP, ENVIA EL CORREO ELECTRONICO EN EL ORDEN DE = a quien?-asuntu-el mensaje-pagino de reedireccion// 

mail($para, $tema, ($mensaje), $header);

//redireccion una ves apretado el submit// 
header('location:mensajeForm.html');

?>