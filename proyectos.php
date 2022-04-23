<?php 

$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body id="proyectos">

<?php include_once "header.php"?>
    
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="6">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4 p-3">
                    <div class="proyectos">
                        <img src="images/abmclientes.png" alt="AMB clientes" class="img-fluid">
                        <h2 class="p-3 d-block">ABM CLIENTES</h2>
                        <p class="p-3 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML,
                            CSS, PHP, Bootstrap y Json.</p>
                        <div class="row py-4">
                            <div class="col-6 ps-4">
                                <a href="" target="_black" class="btn btn-rojo">Ver online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="">Ver online</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 p-3">
                    <div class="proyectos">
                        <img src="images/abmventas.png" alt="AMB ventas" class="img-fluid">
                        <h2 class="p-3 d-block">SISTEMA DE GESTIÓN DE VENTAS</h2>
                        <p class="p-3 d-block">Sistema de gestión de clientes, productos y ventas. Realizado en HTML,
                            CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        <div class="row py-4">
                            <div class="col-6 ps-4">
                                <a href="" target="_black" class="btn btn-rojo">Ver online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="">Ver online</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 p-3">
                    <div class="proyectos">
                        <img src="images/abmclientes.png" alt="AMB clientes" class="img-fluid">
                        <h2 class="p-3 d-block">ABM CLIENTES</h2>
                        <p class="p-3 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML,
                            CSS, PHP, Bootstrap y Json.</p>
                        <div class="row py-4">
                            <div class="col-6 ps-4">
                                <a href="" target="_black" class="btn btn-rojo">Ver online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="">Ver online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
   
    <?php include_once "footer.php"?>


</body>

</html>