<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RG Limpiezas</title>
        <link rel="shortcut icon" href="imagenes/iconweb.ico" type="image/x-icon">
        <meta name="description" content="RG Limpiezas">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2b703b4cc6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilos/estilos.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;600&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="padre">
<header class="header">
    <div class="menu" >
        <div class="logo"><a href="index.html"><img src="imagenes/newlogo.png" alt="Homepage"></a></div>
        <div class="nav">
            <a href=Index.html><i class="fas fa-home"></i><span class="off"> INICIO </span></a>
            <a href="http://"><i class="fas fa-briefcase"></i><span class="off"> NOSOTROS </span></a>
            <a href="servicios.html"><i class="fas fa-concierge-bell"></i><span class="off"> SERVICIOS </span></a>
            <a href="http://"><i class="fas fa-mobile-alt"></i><span class="off"> CONTACTO </span></a>
      <div class="social">
            <div><a href="#"><i class="fas fa-language"></i></a></div>
    </div> 
    
</div>
        
    </div>
    
</header>
<div class="formulario">
    <h1> CONTACTO</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="formulario-contacto" method="POST" role="form">
        <div class="contenedor-form">
            <div class="input-nombre">
                <label for="nombre">Nombre<span class="verde">*</span></label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre"> 
                <p class="error-mensaje">Mensaje de error</p>
            </div>
            <div class="input-apellido">
                <label for="nombre">Nombre<span class="verde">*</span></label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre"> 
                <p class="error-mensaje">Mensaje de error</p>
            </div>
            <div class="input-nombre">
                <label for="nombre">Nombre<span class="verde">*</span></label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre"> 
                <p class="error-mensaje">Mensaje de error</p>
            </div>
            <div class="input-nombre">
                <label for="nombre">Nombre<span class="verde">*</span></label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre"> 
                <p class="error-mensaje">Mensaje de error</p>
            </div>
            <div class="input-nombre">
                <label for="nombre">Nombre<span class="verde">*</span></label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre"> 
                <p class="error-mensaje">Mensaje de error</p>
            </div>
            <div class="info-obligatoria">
                <p class="verde">* Es necesario rellenar esta informacion</p>
            </div>
            <div class="boton-enviar">
                <input type="submit" value="Enviar">
            </div>
        </div>  
        <p class="mensaje-enviado"> Muchas Gracias, su mensaje ha sido enviado correctamente!</p>       
    </form>
</div>
<footer class="footer">
    <nav class="pie">
        <a href="#"> Politica de Privacidad | </a> 
        <a href="#"> Desarrollado por Glint web desing sl </a>
    </nav>
    <div class="social-pie">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
</footer>
        </div>
            </body>
</html>