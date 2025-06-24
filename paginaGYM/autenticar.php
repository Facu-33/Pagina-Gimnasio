<?php
include("conexion.php");

//login
if ($_GET['pagina'] == '1'){
    // traigo el contenido de la pagina login.php con el GET 
        $IngresoUsuario = $_GET['usuario'];
        $IngresoClave = $_GET['clave'];

    //verifica que el usuario y contraseña coincidan
    $consulta_sql = "SELECT usuario,clave from usuarios where usuario = '$IngresoUsuario' and clave = '$IngresoClave'";
}

//registro
if ($_GET['pagina'] == '2'){
    // traigo el contenido del input de la pagina registrar.php con el GET
    $IngresoUsuarioNuevo = $_GET['Usuario_Nuevo'];
    $IngresoClaveNuevo = $_GET['Clave_Nueva'];
    
    $consulta_sql = "SELECT usuario,clave from usuarios where usuario = '$IngresoUsuarioNuevo' and clave ='$IngresoClaveNuevo'";
}

$resultado = mysqli_query($link,$consulta_sql);

//Resultados de la consulta
    //login
if ($_GET['pagina'] == '1'){

    if($resultado && mysqli_num_rows($resultado) > 0){
        header("location: principal.php");
        exit();
    }else{
        header("location: index.php");
        exit();
}
}

//registrar
if ($_GET['pagina'] == '2'){

        $usuario=$_GET["usuario"];
        $clave=$_GET["clave"];
        $nombre=$_GET["nombre"];
        $plan=$_GET["plan"];

        $planMap = [
        "0" => "dia",
        "1" => "semana",
        "2" => "mes",
        "3" => "año"
        ];

            // Convertir $plan al valor de texto usando el mapa
    if (isset($planMap[$plan])) {
        $plan = $planMap[$plan]; // ahora $plan contiene el texto correspondiente
    } else {
        $plan = "desconocido"; // en caso de que no exista el valor
    }
                    $agregar = $link->prepare(" INSERT INTO usuarios(usuario, clave, nombre, plan) VALUES (?, ?, ?, ?)");
                    $agregar->bind_param("ssss", $usuario, $clave, $nombre, $plan);
            
        if($agregar->execute()){
            header("location: principal.php");
        }else{
            echo "Error al insertar registro: ". $agregar->error;
        }
        $agregar->close();

}

 ?> 