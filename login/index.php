<?php
session_start();
require_once("./app/config/dependencias.php");
require_once("./app/controller/inicio.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS."inicio.css";?>">
    <title>Formulario de datos</title>
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .btn-custom {
            background-color: #ff6b6b;
            color: white;
        }
        .btn-custom:hover {
            background-color: #ff4b4b;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center fs-3">Bienvenido, <?= $_SESSION['registro']['nombre']; ?>!</h1>

        <!-- Tabla con información del usuario -->
        <table class="table table-striped table-bordered mt-4">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Campo</th>
              <th scope="col">Información</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Nombre</td>
              <td><?= $_SESSION['registro']['nombre']; ?></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Apellido</td>
              <td><?= $_SESSION['registro']['apellido']; ?></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Email</td>
              <td><?= $_SESSION['registro']['email']; ?></td>
            </tr>
          </tbody>
        </table>

        <!-- Botón para cerrar sesión -->
        <div class="d-flex justify-content-center mt-4">
            <a href="cerrar_sesion.php" class="btn btn-custom btn-lg">Cerrar sesión</a>
        </div>
    </div>

    <script src="<?=JS."bootstrap.bundle.min.js";?>"></script>
</body>
</html>
