<?php
	//echo "Respuesta por parte del servidor";
include "conexion.php";
$nom=$_GET['Nom'];
$dir=$_GET['Dir'];
$rfc=$_GET['RFC'];
$tel=$_GET['Tel'];
$clas=$_GET['Clas'];
$tomar=$_GET['Tomar'];
$lati=$_GET['Lati'];
$longi=$_GET['Long'];

$sql="INSERT INTO Servicios VALUES('0', '$nom', '$dir', '$rfc', '$tel', '$clas', '$tomar','$lati', '$longi')";
$reg =mysqli_query($conn, $sql);

if($reg){
	echo "los datos fueron registrados correctamente: Nom:".$nom." Dir:".$dir." RFC:".$rfc." Tel:".$tel."Clas".$clas." Tomar:".$tomar." Lati:".$lati." Long:".$longi;
}else{
	echo "Hubo un error a registrar los datos:".mysqli_error();
}

	
	?>