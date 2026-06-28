<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <li><a href="/">Home</a></li>
    <li><a href="/blog">Blog</a></li>
    <li><a href="/nosotros">Nosotros</a></li>
    <li><a href="<?=route('contact')?>">Contacto</a></li> <!-- agregamos el nombre a la ruta-->
</body>
</html>