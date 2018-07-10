
<?php
        if ( isset($_GET["p"]) ){
        	$pagina = $_GET["p"];
        }
        else {
        	$pagina="home";
        }
        
        include "header.php";
?>
		<div class="container">
<?php
        if ( file_exists("{$pagina}.php") ) {
        	include "{$pagina}.php";
        }
        else {
        	include "404.php";
        }
        
?>
		</div>
<?php
        include "footer.php";  

        $dinos = array( 
                 array('Nombre' => 'Tyranosaurus', 'Largo' => '12.3', 'Peso' => '9000'),
                 array('Nombre' => 'Velocirraptor', 'Largo' => '1.8', 'Peso' => '15'),
                 array('Nombre' => 'Triceratops', 'Largo' => '9', 'Peso' => '12000'),
                 array('Nombre' => 'Stegosaurus', 'Largo' => '9', 'Peso' => '4500'),
                 array('Nombre' => 'Parasaurolophus', 'Largo' => '10', 'Peso' => '2500')
        );

        
        print_r($dinos);
        // header("Content-Type: application/json");
        // echo json_encode($productos);
?>