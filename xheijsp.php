<?php 
$datos1= htmlspecialchars(filter_var($_GET['serie'],FILTER_SANITIZE_STRING));
$datos2= htmlspecialchars(filter_var($_GET['poi'],FILTER_SANITIZE_STRING));
$return=consulta($datos1,$datos2);

?>		