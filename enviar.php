<?php
// print_r( $_POST );
// var_dump( $_POST );
// print_r($_SERVER);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if ( empty($_POST["nombre"]) || is_numeric($_POST["nombre"]) ) {
		echo "ERROR: Ingrese un nombre válido";
	}
	    elseif ( empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL ) ) {
			echo "ERROR: Ingrese un email válido";
	    }
	        elseif ( empty($_POST["mensaje"]) || strlen($_POST["mensaje"]) < 10 || strlen($_POST["mensaje"]) > 120 ) {
	        	echo "ERROR: Ingrese un mensaje ";
	        }
	            else{
	            	$nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_SPECIAL_CHARS);
	            	$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	            	$mensaje = filter_var($_POST["mensaje"], FILTER_SANITIZE_SPECIAL_CHARS);
	            	$destinatario = "hekatombes@gmail.com";
	            	$asunto = "Mensaje automatico";
	            	$cuerpo = "<h1> Alerta!!!</h1>";
	            	$cuerpo.="<p>El boludo de {$nombre} ({$email}) dice que {$mensaje}</p>";
	            	$cuerpo.= "<p>Amén.</p>";
	               	}
}
else{
	header("location: index.php?p=contacto");
}

	require 'mail.config.php';

	# Configuracion del envio
	$mail->setFrom($email, $nombre);			// ◄ Emisor
	$mail->addAddress($destinatario, 'Pablo Bettanzzo');		// ◄ Destinatario
	$mail->addReplyTo('pablobettanzzo@outlook.com', 'Information');	// ◄ E-Mail de respuesta (opcional)
	//$mail->addCC('cc@example.com');						// ◄ E-Mail adicional en Copia Compartida (opcional)
    $mail->addBCC('pablobettanzzo@outlook.com');						// ◄ E-Mail adicional en Copia Compartida Oculta (opcional)
	
	# Configuracion del email
	$mail->isHTML(true);									// ◄ Soporte para HTML (true/false)
	$mail->Subject = $asunto;								// ◄ Asunto del E-Mail
	$mail->Body = $cuerpo;								// ◄ Cuerpo del E-Mail
	$mail->CharSet = "UTF-8";								// ◄ Caracteres especiales
	$mail->SMTPDebug = 0;									// ◄ Visualizador para testeo (0: apagado | 1: mensajes del cliente | 2: mensajes del cliente y servidor)

	$mail->send();


?>