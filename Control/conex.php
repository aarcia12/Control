<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'notas');	if($mysqli->connect_error)
        {		
     die('Error en la conexion' . $mysqli->connect_error);
		}
?>