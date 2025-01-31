<?php
session_start();
include 'includes/header.php';
?>
<div class="welcome-container">
    <h2>Bienvenidos al Gestor de Ventas</h2>
    <div class="image-placeholder">
        <!-- Aquí se mostrará la imagen más adelante -->
    </div>
</div>
<?php include 'includes/footer.php'; ?>
<style>

.welcome-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin: 20px auto;
    max-width: 800px; /* Ancho máximo para el contenedor */
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

.welcome-container h2 {
    font-family: 'Nunito', sans-serif;
    font-size: 24px;
    color: #D3A6C0;
    margin-bottom: 20px;
}

.image-placeholder {
    width: 300px; /* Ancho del recuadro */
    height: 200px; /* Alto del recuadro */
    border: 2px dashed #ccc;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    color: #999;
    font-size: 16px;
    font-style: italic;
}

.image-placeholder::after {
    content: 'Espacio reservado para la imagen';
}

</style>