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
?>