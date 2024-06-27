<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="<?php echo base_url('Assets/styles.css'); ?>">
</head>
<body>
    <h1>Productos</h1>
    <ul>
    <?php foreach ($productos as $producto): ?>
        <li>
            <?php echo $producto['nombre']; ?>
            <a href="<?php echo base_url('detallesView/' . $producto['id']); ?>" class="ver-detalles">Ver detalles</a>
        </li>
    <?php endforeach; ?>    
    </ul>
</body>
</html>


