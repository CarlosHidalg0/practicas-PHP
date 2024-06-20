<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $edad = $_POST['edad'];


    if (!preg_match("/^[A-Za-zñÑüÜáéíóúÁÉÍÓÚ\s]+$/", $name)) 
    {
        echo "El nombre contiene caracteres invalidos.<br>";
    }
    else
    {
        echo "Nombre: " . htmlspecialchars($name) . "<br>";
    }


    if (!preg_match("/^\d{1,2}$/", $edad))
    {
        echo "La edad debe ser un número de 1 a 2 dígitos.<br>";
    }
    else
    {
        $edad = (int)$edad;
        echo "Edad: " . $edad . "<br>";
    }

    if ($edad >= 18)
    {
        echo "Si Puede votar.<br>";
    }
    else
    {
        echo "No puede votar.<br>";
    }
}
