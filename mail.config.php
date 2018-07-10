<?php
	require 'src-mailermaster/PHPMailer.php';
	require 'src-mailermaster/SMTP.php';
	require 'src-mailermaster/Exception.php';
	require 'src-mailermaster/OAuth.php';
	
	use PHPMailer\PHPMailer\PHPMailer;
	
	# Datos del Servidor SMTP 
	define("SERVIDOR", 'smtp.gmail.com');
	define("ENCRIPTACION", 'ssl');
	define("PUERTO", 465);
	
	# Datos de la cuenta de envio
	define("USUARIO", 'hekatombes@gmail.com');
	define("CLAVE", 'darthvader88');

	$mail = new PHPMailer();

	# Configuracion del sistema de envio
	$mail->isSMTP();
	$mail->Host = SERVIDOR;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = ENCRIPTACION;
	$mail->Port = PUERTO;
	$mail->Username = USUARIO;
	$mail->Password = CLAVE;
?>