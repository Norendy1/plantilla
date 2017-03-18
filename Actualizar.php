<?php
	//echo "Respuesta por parte del servidor";
include "conexion.php";
$id=$_POST["id"];
$nom=$_POST['Nom'];
$dir=$_POST['Dir'];
$rfc=$_POST['RFC'];
$tel=$_POST['Tel'];
$clas=$_POST['Clas'];
$tomar=$_POST['Tomar'];
$lati=$_POST['Lati'];
$longi=$_POST['Long'];

$sql="UPDATE Servicios SET Nombre_servicio='$nom', Direccion='$dir', RFC='$rfc', Telefono='$tel', Clasificacion='$clas', Foto='$tomar',Latitud='$lati', Longitud='$longi' where id_servicio=$id";
$reg=mysqli_query($conn, $sql);

if($reg){
	echo "Nom:".$nom." Dir:".$dir." RFC:".$rfc." Tel:".$tel."Clas".$clas." Tomar:".$tomar." Lati:".$lati." Long:".$longi;
}else{
	echo "Error actualizar datos:".mysqli_error();
}
mysql_close($conn);
	
	?>