<?php
// Controlando los parametros GET que ingresaran a traves de la URL.
// Ej: localhost/cursojs/index.php?op=leccion1_prueba
if (empty($_GET["op"])) {
    $ruta = "inicio/inicio";
} else {
    $op = $_GET["op"];
    // Seperando nombre carpeta de archivo
    $paratemtros = explode("_", $op);
    $carpeta = $paratemtros[0]; // Este es el nombre de la carpeta
    $archivo = $paratemtros[1]; // Este es el nombre del archivo "prueba.php"
    if ($carpeta != "") { // Si la carpeta no es vacia
        $ruta = $carpeta . "/" . $archivo; // leccion1/prueba.php
    } else {
        //Enviar a un archivo de error 404 
    }
} // if empty
?>

<?php
include 'database/db_connection.php';
$conn = OpenCon();
CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor App</title>

    <!-- CSS - Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JS -- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>

    <button onclick="topFunction()" type="button" id="myBtn" title="Go to top" class="btn btn-dark btn-lg position-fixed bottom-0 end-0 mx-3 mb-4">
        <i class="fas fa-skull-crossbones fa-lg"></i>
    </button>

    <div class="container">
        <!-- Encabezado -->
        <div class="row border-bottom">
            <div class="col-12 p-2 text-start">

                <?php include("archivos/encabezado.php"); ?>

            </div>
        </div>

        <!-- Contenido -->
        <div class="col-12 p-2 text-center">
            <?php include("contenido/" . $ruta . ".php");
            ?>

        </div>

        <!-- Pie -->
        <div class="row">
            <div>
                <?php include("archivos/pie.php"); ?>
            </div>

        </div>
    </div>

</body>

</html>