<?php
$entrada = $_POST['numero'] ?? null;
$cantidadPrimos = null;
$numeroInvertido = null;
$error = null;

if ($entrada !== null) {
	if (!is_string($entrada) || preg_match('/^\d+$/', $entrada) !== 1) {
		$error = 'Ingrese un número entero válido.';
	} else {
		$limite = filter_var($entrada, FILTER_VALIDATE_INT);

		if ($limite === false || $limite < 1 || $limite > 1000000) {
			$error = 'El límite debe estar entre 1 y 1 000 000.';
		} else {
			$numeroInvertido = (int) strrev((string) $limite);
			$esPrimo = array_fill(0, $limite + 1, true);
			$esPrimo[0] = false;
			if ($limite >= 1) {
				$esPrimo[1] = false;
			}

			for ($numero = 2; $numero * $numero <= $limite; $numero++) {
				if ($esPrimo[$numero]) {
					for ($multiplo = $numero * $numero; $multiplo <= $limite; $multiplo += $numero) {
						$esPrimo[$multiplo] = false;
					}
				}
			}

			$cantidadPrimos = 0;
			for ($numero = 2; $numero <= $limite; $numero++) {
				if ($esPrimo[$numero]) {
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
	<h1>Contar números primos</h1>
	<?php if ($error !== null): ?>
		<p role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
	<?php elseif ($entrada !== null): ?>
		<p>Entre 1 y <?= htmlspecialchars($entrada, ENT_QUOTES, 'UTF-8') ?> hay <strong><?= $cantidadPrimos ?></strong> números primos.</p>
		<p>El número invertido es: <strong><?= $numeroInvertido ?></strong>.</p>
	<?php else: ?>
		<p>Ingrese un límite en el formulario para ver el resultado.</p>
	<?php endif; ?>
	<p><a href="index.html">Volver al formulario</a></p>
</body>
</html>

