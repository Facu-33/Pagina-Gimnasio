 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="...">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>LOGIN</title>
    <!--MARGEN para USUARIO y CONTRASEÑA-->
   <style>
    .customform{
    max-width: 400px;
    margin: 0 auto;
    margin-top: 100px;
    }
    </style>
 </head>  
 <body background="img/fondo.png">  
   <!--usuario y contraseña-->
    <div class="customform">
        <form action="autenticar.php" method="GET" id="FormPrincipal">
            <input type= "hidden" name= "pagina" value= "1">
            <p>Usuario</p>
            <input type="text" name="usuario" class="form-control" placeholder="Ingrese Usuario" required>
            <br>
            <p>Contraseña</p>
            <input type="text" name="clave" class="form-control" placeholder="Ingrese Contraseña">
            <br>  
             <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <a href="registrar.php">Registrarse</a>
    </div>
</body>