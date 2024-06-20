<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Números</title>
</head>
<body>
    <h1>Conversor de Números</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="decimalInput">Ingrese un valor decimal:</label>
        <input type="number" id="decimalInput" name="decimalInput" required>
        <br><br>
        <label for="conversionType">Seleccione la opción de conversión:</label>
        <select id="conversionType" name="conversionType">
            <option value="binary">Decimal a Binario</option>
            <option value="octal">Decimal a Octal</option>
            <option value="hexadecimal">Decimal a Hexadecimal</option>
        </select>
        <br><br>
        <button type="submit">Convertir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimalValue = intval($_POST["decimalInput"]);
        $conversionType = $_POST["conversionType"];
        $result = '';

        function decimalToBinary($decimal) {
            $binary = '';
            while ($decimal > 0) {
                $binary = ($decimal % 2) . $binary;
                $decimal = floor($decimal / 2);
            }
            return $binary;
        }

        function decimalToOctal($decimal) {
            $octal = '';
            while ($decimal > 0) {
                $octal = ($decimal % 8) . $octal;
                $decimal = floor($decimal / 8);
            }
            return $octal;
        }

        function decimalToHexadecimal($decimal) {
            $hexChars = '0123456789ABCDEF';
            $hexadecimal = '';
            while ($decimal > 0) {
                $hexadecimal = $hexChars[$decimal % 16] . $hexadecimal;
                $decimal = floor($decimal / 16);
            }
            return $hexadecimal;
        }

        switch ($conversionType) {
            case 'binary':
                $result = decimalToBinary($decimalValue);
                break;
            case 'octal':
                $result = decimalToOctal($decimalValue);
                break;
            case 'hexadecimal':
                $result = decimalToHexadecimal($decimalValue);
                break;
            default:
                echo "Opción no válida. Intente nuevamente.";
                exit;
        }

        echo "<p>El valor $conversionType de $decimalValue es $result</p>";
    }
    ?>
</body>
</html>
