<?php
require_once("./app/config/dependencias.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS . "bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?= ICONS . "bootstrap-icons.css"; ?>">
    <link rel="stylesheet" href="<?= CSS . "registro_vista.css"; ?>">
    <title>Formulario de Registro</title>
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .c-user i {
            font-size: 3rem;
            color: #007bff;
        }
        .input-group-text {
            background-color: #007bff;
            color: #fff;
        }
        .c-input {
            background-color: #f1f1f1;
        }
        .form-control {
            background-color: transparent;
        }
        .btn-success {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-success:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <form id="form-registro" class="p-4">
        <div class="text-center mb-4 c-user">
            <i class="bi bi-cloud-fog2-fill"></i>
        </div>
        
        <!-- Nombre -->
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-file-person input-group-text fs-3"></i>
            <input type="text" class="form-control" placeholder="Ingrese su nombre" id="nombre" name="nombre">
        </div>
        
        <!-- Apellido -->
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-file-person input-group-text fs-3"></i>
            <input type="text" class="form-control" placeholder="Ingrese su apellido" id="apellido" name="apellido">
        </div>
        
        <!-- Email -->
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-envelope input-group-text fs-3"></i>
            <input type="email" class="form-control" placeholder="Ingrese su email" id="email" name="email">
        </div>
        
        <!-- Contraseña -->
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-key-fill input-group-text fs-3"></i>
            <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="pass" name="pass">
        </div>
        
        <!-- Botón de registro -->
        <div class="mt-4 c-button">
            <button id="registro" type="button" class="btn btn-success w-100">Registrar</button>
        </div>
    </form>

    <script src="./public/js/registro.js"></script>
</body>
</html>
