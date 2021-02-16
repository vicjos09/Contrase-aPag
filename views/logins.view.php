<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Iniciar Sesion</title>
</head>
<body>
       <div class="contenedor">
         <h1 class="titulo">Iniciar Sesion</h1>
         <hr class="border">
         <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
         class="formulario" name="login">
         
         <div class="form-group">
         <i class="icono izquierda fa fa-user"></i>
         <input type="text" name="usuario" class="usuario" placeholder="Usuario">
         </div>
         

         <div class="form-group">
         <i class="icono izquierda fa fa-lock"></i>
         <input type="password" name="password" class="password_btn" placeholder="Contraseña"><i class="submit-btn fa fa fa-arrow-right" onclick="login.submit()"></i>
         </div>
          <?php if(!empty($errores)): ?>
                   <div>
                      <ul>
                         <?php echo $errores ?>
                      </ul>

                   </div>
          
         <?php endif; ?>

         </form>
         <p class="texto-registrate">
            ¿No tienes cuenta?
            <a href="registro.php">Registrate</a>
            
         </p>
        
       </div>
</body>
</html>