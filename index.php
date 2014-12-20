<?php
#------------------------------------------------------------------------
#Se incluye el archivo y se indican las configuraciones basicas
#------------------------------------------------------------------------
include 'antispam/captcha.php';
$captcha->classInput = '';
$captcha->classOpciones = '';
$captcha->classError = 'error';
$captcha->placeholder = "ingrese el numero";
#------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<form action="recibe.php" method="POST">
		<label>Ingrese su nombre</label>
		<input type="text" name="txtnombre" id="txtnombre">
		<!-- Se agrega el captcha -->
		<?php echo $captcha->CreaCaptcha();?>
		<input type="submit" name="btenviar" value="Enviar">
	</form>
</body>
</html>