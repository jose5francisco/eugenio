<?php

include_once 'source/session.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <header class="header" id="inicio">
        <img class="hamburguer" src="img/menu.svg" alt="">
        <nav class="menu-navegacion">
        <?php if(!isset($_SESSION['username'])): header("location: salir.php");?>
                <?php else: ?>
                <?php endif ?>
                <?php echo "<h1> Bienvenido ".$_SESSION['username']." </h1>" ?><h2><a href="salir.php">Cerrar sesion</a></h2>
                <a href="#inicio">Inicio</a>
                <a href="#servicio">Quien somos</a>
                <a href="#galeria">Galeria</a>
                <a href="#expertos">Especializados</a>
                <a href="#footer">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Welcome</h1>
        </div>
        
    </header>
    <main>
        <section class="services contenedor" id="servicio">
            <h2 class="subtitulo">Quienes somos</h2>
            <div class="contenedor-servicio">
                <img src="img/woman.jpg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>Mision</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>Vision</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>Objetivo</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo">Galeria</h2>
                <div class="contenedor-galeria">
                    <img src="img/pastel.jpg" class="img-galeria" alt="Hola">
                    <img src="img/pastel-1.jpg" class="img-galeria" alt="">
                    <img src="img/pastel-2.jpg" class="img-galeria" alt="">
                    <img src="img/cumpleaños.jpg" class="img-galeria" alt="">
                    <img src="img/galleta1.jpg" class="img-galeria" alt="">
                    <img src="img/pai.jpg" class="img-galeria" alt="">
                </div>
            </div>
        </section>
        <div class="imagen-light">
            <img src="img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/Web.svg" alt="">
                    <h3 class="n-expert">Cuidar tu informacion</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/linea.svg" alt="">
                    <h3 class="n-expert">Venta en linea</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/Family.svg" alt="">
                    <h3 class="n-expert">Tener los mejores pasteles</h3>
                </div>
            </section>
        </section>
    </main>

    <footer id="footer">
        <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">Jose Eugenio Garcia Sanchez</h2>
                    <p>Js007539@gmail.com</p>
                </div>
                <div class="social-media">
                    <a href="https://www.facebook.com/Pasteler%C3%ADa-Dulce-Gatito-585369695477952/" class="social-media-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="./" class="social-media-icon">
                        <i class='bx bxl-twitter' ></i>
                    </a>
                    <a href="https://www.instagram.com/p/CKSO82zBfBy/?igshid=sao3lmyo0num" class="social-media-icon">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>