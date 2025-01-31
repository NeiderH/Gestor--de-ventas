<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Ventas</title>
    <!-- <link rel="stylesheet" href="/assets/css/estilo.css"> -->
    <!-- Incluyendo Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reinicio de márgenes y padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            position: fixed; /* Fija el header en la parte superior */
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgb(217, 138, 65);
            color: #fff;
            padding: 10px 20px;
            z-index: 1000; /* Asegura que el header esté por encima de otros elementos */
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra para el header */
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            margin-right: 20px;
        }

        .auth-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
            font-size: 14px;
        }

        .auth-links .cliente {
            margin-right: 15px;
            font-weight: bold;
        }

        main {
            margin-top: 70px; /* Espaciado para evitar que el contenido quede oculto detrás del header */
            padding: 20px;
        }

        .banner {
            height: 200px;
            background-image: url('/assets/img/banner.jpg'); /* Cambia esta ruta por tu imagen */
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Banner con imagen de fondo en HTML -->
    <section class="banner">
        <nav>
            <div class="menu">
                <a href="/index.php">Inicio</a>
            </div>
            <div class="auth-links">
                <?php if (isset($_SESSION['nombre'])): ?>
                    <span class="cliente">Bienvenid@, <?= htmlspecialchars($_SESSION['nombre']) ?>!</span>
                    <a href="/auth/logout.php">
                        <i class="fas fa-user"></i> Cerrar Sesión
                    </a>
                    <a href="/dashboard.php">
                        <i class="fas fa-user"></i> Dashboard
                    </a>
                <?php else: ?>
                    <a href="/auth/login.php">
                        <i class="fas fa-user"></i> Iniciar Sesión
                    </a>
                <?php endif; ?>
            </div>
        </nav>
    </section>

</body>
</html>
