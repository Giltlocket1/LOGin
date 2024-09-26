<?php 
require_once "./app/config/dependencias.php";
session_start();

// Si el usuario ya está autenticado, puede redirigirse a la página principal
if (isset($_SESSION['usuario'])) {
    /* header("location: /.index.php"); */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <link rel="stylesheet" href="<?=CSS."login.css";?>">
    <title>Formulario de datos</title>
    <style>
        body {
            background: linear-gradient(135deg, #ffafbd, #ffc3a0);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .c-user i {
            font-size: 3rem;
            color: #f15a24;
        }
        .input-group-text {
            background-color: #f15a24;
            color: #fff;
        }
        .btn-success {
            background-color: #f15a24;
            border-color: #f15a24;
        }
        .btn-success:hover {
            background-color: #e04b20;
            border-color: #e04b20;
        }
        .c-button {
            margin-top: 40px;
        }
        a {
            color: #f15a24;
        }
        a:hover {
            color: #e04b20;
        }
    </style>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <form action="./login.php" method="post" class="w-25 p-4">
        <div class="text-center mb-5 c-user">
            <i class="bi bi-browser-firefox"></i>
        </div>

        <!-- Email Input -->
        <div class="input-group mt-3">
            <i class="bi bi-person-fill input-group-text fs-3"></i>
            <input type="text" class="form-control" placeholder="Ingrese su email" id="email" name="email" value="<?= (!empty($_POST['email'])) ? $_POST['email'] : ''; ?>">
        </div>

        <!-- Password Input -->
        <div class="input-group mt-3">
            <i class="bi bi-eye-fill input-group-text fs-3"></i>
            <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="pass" name="pass" value="<?= (!empty($_POST['pass'])) ? $_POST['pass'] : ''; ?>">
        </div>

        <!-- Submit Button -->
        <div class="mt-5 c-button">
            <button type="submit" class="btn btn-success w-100">Ingresar</button>
        </div>

        <!-- Registration Link -->
        <div class="mt-4 d-flex justify-content-center">
            <a href="./registro_vista.php" class="mx-3">Crear una cuenta</a>
        </div>
    </form>

    <script src="<?=JS."bootstrap.bundle.min.js";?>"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>
