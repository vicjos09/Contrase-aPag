<?php session_start();
$errores2='';
$info='';
require 'funcion.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$aCambiar=filter_var($_POST['pss'],FILTER_SANITIZE_STRING);
	$var=(strlen($aCambiar)==8)?true:false;
   
	if (!empty($aCambiar)&&is_numeric($aCambiar)&&$var) {
	
    cambioContraseña($aCambiar);

	}else{
    $errores2.='<li>Por seguridad la contraseña debe tener 8 digitos y solo numeros </li>';
	}
}

if (isset($_SESSION['usuario'])) {
	$info=consultaDatos();
	require 'views/contenido.view.php';
	
}else{
	header('Location:login.php');
}

 ?>