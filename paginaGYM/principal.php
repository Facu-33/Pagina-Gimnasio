 <!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
 </head>
 <body>     
         <div class="seccion">
            <main>
                  <table class="table table-hover table-dark">

                  <thead>
                        <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Plan</th>
                        <th scope="col">ACCIONES</th>
                        </tr>
                  </thead>

                  <tbody>
                  <?php
                        include("conexion.php"); 
                                      
                        $mostrar = "SELECT * FROM usuarios order by usuario desc";
                        $resultado = mysqli_query($link, $mostrar);

                 while ($fila = mysqli_fetch_assoc($resultado)){
                        $ID = json_encode($fila['ID']);
                        echo "<tr>
                                    <td>" . htmlspecialchars($fila['ID' ]) . "</td>
                                    <td>" . htmlspecialchars($fila['nombre' ]) . "</td>
                                    <td>" . htmlspecialchars($fila['usuario' ]) . "</td>
                                    <td>" . htmlspecialchars($fila['clave' ]) . "</td>
                                    <td>" . htmlspecialchars($fila['plan' ]) . "</td>
                                    <td>
                                          <button type='button' class='btn-success' onclick='Editar($ID)'>Editar</button>
                                          <button type='button' class='btn-danger' onclick='Eliminar($ID)'>Eliminar</button>
                                    </td>
                              </tr>";
                        }
                  ?>
                  </tbody>
                  </table>
            </main>
         </div>
           <a href="index.php">Cerrar Sesion</a>
 
<body>
 </html>
 
