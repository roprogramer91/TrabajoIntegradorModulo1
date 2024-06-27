<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link rel="stylesheet" href="<?php echo base_url('Assets/styles.css'); ?>">
</head>
<body>
    <h1>DETALLES</h1>

        <li><strong>Nombre: </strong> <?php echo $producto['nombre']; ?></li>
        <li><strong>Precio: </strong> <?php echo $producto['precio']; ?></li>
        <li><strong>Stock: </strong> <?php echo $producto['stock'] ? 'Disponible' : 'No disponible'; ?></li>
        <li><strong>Código: </strong> <?php echo $producto['codigo']; ?></li>

        <a href="<?php echo base_url('/'); ?>" class="btn-lista">Volver a la Lista</a>

</body>
</html>