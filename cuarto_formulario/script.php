<?php
    $datos = [
        'dato1' => $_POST['dato1'] ?? 0,
        'dato2' => $_POST['dato2'] ?? 0,
        'dato3' => $_POST['dato3'] ?? 0,
        'dato4' => $_POST['dato4'] ?? 0,
        'dato5' => $_POST['dato5'] ?? 0,
    ];

    $total = array_sum($datos);

    if ($total > 0) {
        foreach ($datos as $nombre => $valor) {
            $porcentaje = ($valor / $total) * 100;
            echo $nombre . ": " . $valor . " equivale al " . number_format($porcentaje, 2) . "% del total.<br>";
        }
    } else {
        echo "La suma total es 0, no se puede calcular porcentaje.";
    }
?>
