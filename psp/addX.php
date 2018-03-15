<?php 
	require_once "consulta.php";
	$x=$_POST['txtX'];

	$addcal="INSERT INTO `tbl_num` (`X`) VALUES ('$x')";

	if (consultarSQL($addcal)) {
		echo "Correcto";

	}else{
		echo "Error";
	}

	header("Location: index.php");

 ?>