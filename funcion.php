<?php 


function consultaDatos(){
     try {
    	$conexion= new PDO('mysql:host=localhost;dbname=lanus','root','');
    } catch (PDOException $e) {
    	echo "Error:". $e->getMessage(); ;
    }
    
    $statement=$conexion->prepare('SELECT*FROM usuarios WHERE usuario=:usuario');
    $statement->execute(array(':usuario'=>$_SESSION['usuario']));
    $resultado=$statement->fetch();
    return $resultado; 
}

function cambioContraseña($parametro){
    try {
    	$conexion= new PDO('mysql:host=localhost;dbname=lanus','root','');
    } catch (PDOException $e) {
    	echo "Error:". $e->getMessage(); ;
    }


    $statement=$conexion->prepare('UPDATE usuarios SET p_lanus=:contraNueva WHERE usuario=:usuario;');
    $statement->execute(array(':usuario'=>$_SESSION['usuario'],':contraNueva'=>$parametro));
   /* $resultado=$statement->fetch();

    return $resultado; */
}

function consulta($data1,$data2){
    try {
    	$conexion= new PDO('mysql:host=localhost;dbname=lanus','root','');
    } catch (PDOException $e) {
    	echo "Error:". $e->getMessage(); ;
    }

    
    $statement=$conexion->prepare(
    	'SELECT*FROM usuarios WHERE serie=:serie AND codigo=:codigo'
    );

    $statement->execute(array(
         ':serie'=>$data1,':codigo'=>$data2
                      ));
    $resultado=$statement->fetch();
    
    return $resultado; 

}





 ?>