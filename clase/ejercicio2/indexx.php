<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
</head>
<body>
    <form action="welcome.php" method="POST">
        Nombre: <input type="text" name="name" pattern="[A-Za-zñÑüÜáéíóúÁÉÍÓÚ\s]+" title="Solo letras y espacios" required]><br><br>

        Edad: <input type="text" name="edad" pattern="\d{1,2}" title="Solo números de 1 a 2 dígitos" required>><br><br>

        <input type="submit" value="Enviar">      
    </form>
</body>
</html>