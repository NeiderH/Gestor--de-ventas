<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>

    <div class="menu">
        <a href="/index.php">Inicio</a>
        <div class="menu-item">
            <a href="#">Rutas de Información</a>
            <div class="submenu">
                <a href="#" class="submenu-item">Científico de Datos</a>
                <a href="/auth/validate.php" class="submenu-item" >Ruta de Formación en .NET</a>
                <a href="#" class="submenu-item">Ruta de Formación en Automatización</a>
            </div>
        </div>
        <div class="menu-item">
            <a href="#">Cursos</a>
            <div class="submenu">
                <a href="#" class="submenu-item">Automatización</a>
                <a href="#" class="submenu-item">Desarrollo de Software</a>
                <a href="#" class="submenu-item">Formación</a>
            </div>
        </div>
        <div class="menu-item">
            <a href="#">Quiénes Somos</a>
            <div class="submenu">
                <a href="#" class="submenu-item">Misión</a>
                <a href="#" class="submenu-item">Visión</a>
            </div>
        </div>
    </div>
    

    <style>
        .menu {
            display: flex;
            align-items: center;
            gap: 2em;
            background-color: #1D3A6C;
            padding: 1em;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            justify-content: center;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 0.5em 1em;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .menu a:hover {
            background-color: #575757;
        }

        .menu-item {
            position: relative;
        }

        .submenu {
            margin-top: 10px;
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            background-color: #333;
            padding: 1em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 10;
            width: max-content;
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .menu-item:hover .submenu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .submenu-item {
            display: block;
            padding: 0.75em 1.5em;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .submenu-item:hover {
            background-color: #1D3A6C ;
        }
            
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color:  #1D3A6C;
}

.container {
    width: 80%;
    max-width: 800px;
    height: 600px;
    background: white;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centra el contenido verticalmente */
    align-items: center; /* Centra el contenido horizontalmente */
    padding: 20px;
    margin-top: 100px;
}

.title {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.images-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    margin-top: -30px;
}

.image-wrapper {
    text-align: center;
    width: 30%;
}

.image-wrapper img {
    width: 100%;
    height: auto;
    border-radius: 4px;
}

.parallax {
    width: 100%;
    height: 50%;
    background-image: url('/images/parallax.jpg');
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    border-radius: 4px;
    background-color: rgba(29, 58, 108, 0.6); /* Fondo con el color #1D3A6C al 60% de opacidad */
    position: relative; /* Necesario para el posicionamiento del pseudo-elemento */
}

.parallax::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('/images/parallax.jpg'); /* Repite la imagen de fondo */
    background-size: cover;
    background-position: center;
    opacity: 0.4; /* Aplica la opacidad a la imagen de fondo */
    z-index: -1; /* Asegura que la imagen quede detrás del texto */
}

.parallax-text {
    display: flex;
    justify-content: center; /* Centrado horizontal */
    align-items: center; /* Centrado vertical */
    height: 100%; /* Asegura que el contenedor ocupe toda la altura de .parallax */
    color: white; /* Color del texto */
    font-size: 24px; /* Tamaño del texto */
    font-weight: bold; /* Grosor del texto */
    text-align: center; /* Asegura que el texto esté centrado */
    padding: 10px; /* Espaciado alrededor del texto */
}




.image-wrapper img {
    width: 150px; /* Aumento el tamaño del círculo */
    height: 150px; /* Aumento el tamaño del círculo */
    border-radius: 50%; /* Hace la imagen circular */
    object-fit: cover; /* Asegura que la imagen cubra todo el círculo sin distorsionarse */
    border: 2px solid #ccc; /* (Opcional) Un borde para dar un efecto de contorno */
}



    </style>
</head>
<body>
    <div class="container">
        <!-- Título principal -->
        <div class="title">Aprende a Construir</div>
        
        <!-- Imágenes con textos -->
        <div class="images-section">
            <div class="image-wrapper">
                <img src="/images/appweb.jpg" alt="appweb">
                <p>Aplicaciones Web</p>
            </div>
            <div class="image-wrapper">
                <img src="/images/webapi.jpg" alt="webapi">
                <p>Web API</p>
            </div>
            <div class="image-wrapper">
                <img src="/images/appseguras.jpg" alt="Imagen 3">
                <p>Aplicaciones Seguras</p>
            </div>
        </div>

        <!-- Parallax o imagen de fondo -->
        <div class="parallax">
    <div class="parallax-text">
        ASP.NET, el framework de Desarrolloweb que permite crear Aplicaciones web potentes,
        <br>
        seguras y escalables de manera facil rapida y eficiente.
    </div>
</div>

        
    </div>
</body>
</html>
