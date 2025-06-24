 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="...">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>REGISTRO</title>
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
   <!--FORMULARIO-->
    <div class="customform">
        <form action="autenticar.php" method="GET" id="FormPrincipal">
            <input type= "hidden" name= "pagina" value= "2">
            <p>Usuario</p>
            <input type="text" name="usuario" class="form-control" placeholder="Ingrese Usuario" required>
            <br> <br>
            <p>Contraseña</p>
            <input type="text" name="clave" class="form-control" placeholder="Ingrese Contraseña" required>
            <br>   <br>
            <p>Nombre</p>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese Su Nombre" required>
            <br>   <br>

                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Plan</label>
                <select name="plan" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Dia</option>
                    <option value="1">Semanal</option>
                    <option value="2">Mensual</option>
                    <option value="3">Anual</option>
                </select>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
</body>