<?php
session_start();
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    if (!empty($correo) && !empty($password)) {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo = ?");
        $stmt->execute([$correo]);
        $nombre = $stmt->fetch();

        if ($nombre && $password === $nombre['password']) {
            $_SESSION['nombre'] = $nombre['nombre'];
            header('Location: /index.php');
            exit;
        } else {
            $error = "Credenciales incorrectas";
        }
    } else {
        $error = "Por favor, completa todos los campos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #e69627;
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }
        input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        input:focus {
            outline: none;
            border-color: #e69627;
            box-shadow: 0 0 5px rgba(230, 150, 39, 0.3);
        }
        button {
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            background-color: #e69627;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #d58321;
        }
        .extra-links {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .extra-links a {
            color: #e69627;
            text-decoration: none;
            font-weight: 600;
        }
        .extra-links a:hover {
            text-decoration: underline;
        }
        p {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <form method="POST">
            <div class="form-group">
            <label for="correo">Correo electrónico</label>
                <input type="email" name="correo" id="correo-login" placeholder="Correo electrónico" required>
            </div>
            <div class="form-group">
            <label for="password">Contraseña</label>
                <input type="password" name="password" id="password-login" placeholder="Contraseña" minlength="1" maxlength="10" required>
            </div>
            <br>
            <button type="submit">Acceder</button>
            <?php if (isset($error)) echo "<p>$error</p>"; ?>
        </form>
        <div class="extra-links">
            <a href="/index.php">Volver</a>
        </div>
        <div class="extra-links">
            <a href="register.php">¿No tienes cuenta? Regístrate</a>
        </div>
    </div>
</body>
</html>
