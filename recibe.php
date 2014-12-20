<?php
#--------------------------------------------------------------------
# Se incluye archivo y confiuguraciones basicas
#--------------------------------------------------------------------
include 'antispam/captcha.php';

$captcha->redirige = false;//true
$captcha->mensajeError = "Se ingreso mal el numero"; //Solo se mostrar si redirige es false
$captcha->paginaerror = "paginaerror.php"; // Solo se mostrara si redirige es true
$captcha->ValidaCaptcha();
#--------------------------------------------------------------------


if ($captcha->estado){
	$nombre = $_POST['txtnombre'];
	echo "E recibido por post el nombre de ".$nombre;
}

?>