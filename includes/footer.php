<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Sticky</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            font-family: "Nunito", "Open Sans", sans-serif;
        }

        main {
            flex: 1; /* Ocupa todo el espacio restante */
            padding: 20px;
        }

        .footer {
            background-color: rgb(217, 138, 65);
            color: #fff;
            padding: 20px 40px;
            font-family: "Nunito", "Open Sans", sans-serif;
        }

        .footer h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #D3A6C;
        }

        .footer-sections {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            margin-top: 20px;
        }

        .footer-bottom p {
            margin: 5px 0;
            font-size: 14px;
            color: #ccc;
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-sections">
            <div class="footer-section support">
                <h3>Soporte</h3>
                <ul>
                    <li>Si tienes inconvenientes o dudas,</li>
                    <li>Contáctanos al correo</li>
                    <li>neiderhiguitaespinosa@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-center">
                <div class="footer-bottom-content">
                    <p>&copy; <?= date('Y') ?> Sofia. Marca Registrada.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
