<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de Productos Latinos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Buscar Productos Latinos en Tiendas Locales</h1>
    <p>Introduce el nombre de un producto latino que desees encontrar y te mostraremos las tiendas cercanas donde está disponible, junto con la dirección.</p>

    <form method="POST">
        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto" placeholder="Ej. Arepas, Yerba Mate..." required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    include 'funciones.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $productoBuscado = $_POST['producto'];
        $resultado = buscarProducto($productoBuscado);

        if (empty($resultado)) {
            echo "<p id='sin-resultados'>No se encontraron tiendas que vendan '$productoBuscado'.</p>";
        } else {
            mostrarResultados($resultado);
        }
    }
    ?>
</body>
</html>