<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>GORDON</title>
</head>

<body>
    <img src="img/logo.jpeg" alt="..." class="logo">
<br>
    <!-- Menu 3 rayas-->
<div class="menu3rayas">
    <nav class="navbar">
        <div class="container-fluid">
            <button class="boton-login" onclick="location.href='login.php'">Login</button>

            <a class="navbar-brand" href="#">GORDON</a>        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
     
            <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--el java de bootstrap para el despliegue del menu-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <br><br><br><br>
<!--carrusel-->
    <div class="container-carousel">
        <div class="carruseles" id="slider">
            <section class="slider-section">
                <img src="img/1.avif">
            </section>
            <section class="slider-section">
                <img src="img/2.avif">
            </section>
            <section class="slider-section">
                <img src="img/3.jpg">
            </section>
            <section class="slider-section">
                <img src="img/4.jpeg">
            </section>
            <section class="slider-section">
                <img src="img/5.jpg">
            </section>
            <section class="slider-section">
                <img src="img/6.jpg">
            </section>
            <section class="slider-section">
                <img src="img/7.jpeg">
            </section>
            <section class="slider-section">
                <img src="img/8.jpg">
            </section>
            <section class="slider-section">
                <img src="img/9.jpeg">
            </section>
            <section class="slider-section">
                <img src="img/10.jpg">
            </section>
        </div>
    </div>
    <div class="container-cuadro">
        <div id="cuadro">
    
   
            <h1>Vení a Entrenar en GORDON</h1>
                <h2>Horarios:</h2>
                <p>Lunes a Viernes: 7 a 22 hs</p>
                <p>Sábado: 9 a 20 hs</p>
                <p>Domingo: 10 a 18 hs</p>
                
                
            <p>Comenzá tu Entrenamiento con nosotros y disfrutá de una experiencia única.</p>
        </div>
    </div>
    </body>
<script src="scriptcarrusel.js"></script>

</html>