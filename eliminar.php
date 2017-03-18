<?php

include "conexion.php";
$id=$_POST["ID"];

$sql="DELETE FROM Servicios where id_servicio=$id";
$result=mysqli_query($conn,$sql);
if($result){
	echo "ID Eliminado";
}else{
	echo "Error al eliminar el ID:".mysqli_error();
}
mysqli_close($conn);
?>