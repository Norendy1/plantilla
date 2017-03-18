<?php
/*$servidor="localhost";
$usuario="root";
$pws="";
$bd="BD";*/
$servidor="mysql.hostinger.co";
$usuario="u399448725_noren";
$pws="servicio";
$bd="u399448725_bd";
$conn=mysqli_connect($servidor, $usuario, $pws, $bd) or die ("Error en conexion".mysqli_error());
?>