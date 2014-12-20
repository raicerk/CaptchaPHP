<?php
#--------------------------------------------------------------------
# Se incluye archivo y confiuguraciones basicas
#--------------------------------------------------------------------
include 'antispam/captcha.php';

$captcha->redirige = false;
$captcha->mensajeError = "Se ingreso mal el numero";
$captcha->paginaerror = "index.php?error=errordecaptcha";
$captcha->ValidaCaptcha();
#--------------------------------------------------------------------


if ($captcha->estado){
	$nombre = $_POST['txtnombre'];
	echo "E recibido por post el nombre de ".$nombre;
}

?>