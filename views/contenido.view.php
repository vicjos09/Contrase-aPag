<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no,
	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<title>Contenido</title>
</head>
<body> 
         <a href="cerrar.php">Cerrar Sesion</a>
         <div class="contenedor">
         <h1 class="titulo">Contenido</h1>
         <hr class="border">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"
            class="formulario" name="login">
             <div class="contenido">
       
               <p class="di"> Usuario: <?php echo strtoupper($_SESSION['usuario']); ?></p>
               <p class="di"> Dispositivo: <?php echo $info['dispo']; ?>  </p>
               <p class="di"> Contraseña Actual: <?php echo $info['p_lanus']; ?>  </p>
          
               <p class="dis">Ingrese la nueva contraseña:</p>
               <div class="form-group">
              
               <input type="password" name="pss" class="password_" placeholder="Nueva contraseña">

               </div>
                <?php if(!empty($errores2)): ?>
                   <div>
                      <ul>
                       <?php echo $errores2 ?>
                      </ul>

                   </div>
          
               <?php endif; ?>
               <input  class="enviar"  type="submit" name="enviar_Contraseña" value="Hecho">
             </div>
             
       </form>
       </div>

       


</body>
</html>