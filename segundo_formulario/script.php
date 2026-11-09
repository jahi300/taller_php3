<?php
$limite = $_POST['numero'] ?? null;
$cantidadPrimos = 0;
$error = null;

if ($limite !== null) {
    if (!is_numeric($limite)) {
        $error = 'Ingrese un número válido.';
    } else {
        $limite = (int) $limite;

        if ($limite < 1) {
            $error = 'Ingrese un número mayor o igual a 1.';
        } else {
            for ($numero = 2; $numero <= $limite; $numero++) {
                $esPrimo = true;

                for ($divisor = 2; $divisor * $divisor <= $numero; $divisor++) {
                    if ($numero % $divisor === 0) {
                        $esPrimo = false;
                        break;
                    }
                }

                if ($esPrimo) {
                    $cantidadPrimos++;
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de números primos</title>
</head>
<body>
    <h1>Números primos</h1>

    <?php if ($error !== null): ?>
        <p role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php elseif ($limite !== null): ?>
        <p>Hay <strong><?= $cantidadPrimos ?></strong> números primos desde 1 hasta <?= htmlspecialchars((string) $limite, ENT_QUOTES, 'UTF-8') ?>.</p>
    <?php else: ?>
        <p>Ingrese un número para ver el resultado.</p>
    <?php endif; ?>

    <p><a href="index.html">Volver al formulario</a></p>
</body>
</html>

