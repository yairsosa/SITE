<?php

$nombre = $_POST ('inputNombre');
$email =  $_POST ('inputEmail');
$mensaje = $_POST ('comentario');
$para =  'lacosechalista16@gmail.com';
$titulo = $_POST ('inputAsunto');
$header =  'From: ' .$email;
$msjCorreo = "Mensaje  de Correo web.\n\n\t Nombre: $nombre\n\n\t Email: $email\n\n\t Mensaje:\n\n\t $mensaje ";

if (empty ($_POST['submit'])){
	
if (mail($para, $titulo, $msjCorreo,$header )){
	
	echo"<script> alert ('Mensaje Enviado Muchas Gracias' );
	window.location.href='pagina_Donde_Redireccionar_Usuario'</script>";
	else{

	echo"<script> alert ('Fallo Mensaje Enviado Intente de Nuevo' );
	window.location.href='pagina_Donde_Redireccionar_Usuario'</script>";

	}
}

}
?>