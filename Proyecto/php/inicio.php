<?php
session_start();

if (empty($_SESSION["employeeNumber"])) {
    header("Location: login.php");
}

$hola = $_SESSION["employeeNumber"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="../css/estilosInicio.css" rel="stylesheet" >

    <style>
        body {
            background-color: #ffffff;
        }

        .navbar{
    background-color: #50C878;
}

        .card {
            
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid d-flex align-items-center justify-content-between">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="../images/logoNoL.png" alt="Bootstrap" width="80" class="me-2">CelorA
    </a>

    <!-- Texto centrado -->
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <span class="navbar-text">
        <?php
        echo "Bienvenido " . $_SESSION["firstName"] . " " . $_SESSION["lastName"];
        ?>

        </span>
      </li>
    </ul>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <!-- Botón "Salir" -->
    <form class="d-flex" role="search">
  <a href="controladorCS.php" class="btn btn-outline-danger">Salir</a>
</form>
  </div>
</nav>





    <!-- Contenido principal -->
    <div class="container my-5">
        <div class="row d-flex justify-content-between">
            <!-- Tarjeta 1 -->
            <div class="col col-lg-3 col-mx-auto">
            <a href="req.php" class="text-decoration-none">
                <div class="card text-center">
                    <img src="../images/expediente.png" class="card-img-top mx-auto mt-4" alt="Opción 1" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Requisiciones</h5>
                        <p class="card-text">Enviar o gestionar requisiciones</p>
                    </div>
                </div>
                </a>
            </div>
          
            <!-- Tarjeta 2 -->
            <?php if ($hola == 1): ?>
            <div class="col col-lg-3 col-mx-auto">
            <a href="#" class="text-decoration-none">
                <div class="card text-center">
                    <img src="../images/presupuesto.png" class="card-img-top mx-auto mt-4" alt="Opción 2" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Cotizaciones</h5>
                        <p class="card-text">Ver y agregar cotizaciones</p>
                    </div>
                </div>
      </a>
            </div>
            <?php endif; ?>

            <!-- Tarjeta 3 -->
            <div class="col col-lg-3">
                <div class="card text-center">
                    <img src="../images/camion-de-reparto.png" class="card-img-top mx-auto mt-4 mb-n5" alt="Opción 3" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Proveedores</h5>
                        <p class="card-text">Descripción breve</p>
                    </div>
                </div>
            </div>

            <div class="col col-lg-3">
                <div class="card text-center">
                    <img src="../images/caja-del-paquete.png" class="card-img-top mx-auto mt-4" alt="Opción 3" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Productos</h5>
                        <p class="card-text">Descripción breve</p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>








    <div class="container my-5">
        <div class="row d-flex justify-content-between">
            <!-- Tarjeta 1 -->
            <div class="col col-lg-3 col-mx-auto">
            <a href="#" class="text-decoration-none">
                <div class="card text-center">
                    <img src="licencias.png" class="card-img-top mx-auto mt-4" alt="Opción 1" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Ordenes de Compra</h5>
                        <p class="card-text">Enviar o gestionar requisiciones</p>
                    </div>
                </div>
                </a>
            </div>
          
            <!-- Tarjeta 2 -->
            <div class="col col-lg-3 col-mx-auto">
            <a href="#" class="text-decoration-none">
                <div class="card text-center">
                    <img src="efectivo.png" class="card-img-top mx-auto mt-4" alt="Opción 2" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Pagos</h5>
                        <p class="card-text">Ver y agregar cotizaciones</p>
                    </div>
                </div>
      </a>
            </div>
            <!-- Tarjeta 3 -->
            <div class="col col-lg-3">
                <div class="card text-center">
                    <img src="usuario.png" class="card-img-top mx-auto my-4" alt="Opción 3" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Perfil</h5>
                        <p class="card-text">Descripción breve</p>
                    </div>
                </div>
            </div>

            <div class="col col-lg-3">
                <div class="card text-center">
                    <img src="feria-de-trabajo.png" class="card-img-top mx-auto mt-4" alt="Opción 3" style="width: 100px; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Empleados</h5>
                        <p class="card-text">Descripción breve</p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>











    <!-- Footer -->
    <footer class="text-center py-3 border-top">
        <small>&copy; 2024 Empresa. Todos los derechos reservados.</small>
    </footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body> 
</html>
