<?php 
	require_once "consulta.php";
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$query="DELETE FROM `tbl_num` WHERE `tbl_num`.`n`  '$id'";
		if (consultarSQL($query)) {
			echo "Registro eliminado.";
		} else {
			echo "Error: No se pudo eliminar el registro.";
		}
		
	} else {
		echo "Error: No se pudo procesar su petición.";
	}
	header('Location: index.php');
 ?>