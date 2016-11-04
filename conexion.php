<?php

	$servidor = "localhost";
	$usuario = "root";
	$pass = "";
	$db_name = "mydb";

	$conexion=mysqli_connect($servidor,$usuario,$pass,$db_name);

	if (mysqli_connect_errno($conexion)) {
		echo "LA BASE DE DATOS NO HA PODIDO CONECTARSE".mysqli_connect_errno();
		
	}

	else {
		 header("Datos Guardados con exito");
	}

?>