<?php include 'index.php'?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir factura_ejemplo</title>
</head>
<body>
    <button onclick="window.open('<?php echo $filePath; ?>', '_blank', 'width=800,height=600');">
        Abrir factura_ejemplo
    </button>
</body>
</html>