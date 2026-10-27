<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar del 4</title>
</head>
<body>
    <h1>Tabla de multiplicar del 4</h1>

    <section>
        <h2>Con FOR: incremento de 2 en 2</h2>
        <table>
            <thead>
                <tr>
                    <th scope="col">Operación</th>
                    <th scope="col">Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($multiplicador = 1; $multiplicador <= 10; $multiplicador += 2): ?>
                    <tr>
                        <td>4 × <?= $multiplicador ?></td>
                        <td><?= 4 * $multiplicador ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </section>

    <section>
        <h2>Con WHILE: tabla completa</h2>
        <table>
            <thead>
                <tr>
                    <th scope="col">Operación</th>
                    <th scope="col">Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php $multiplicador = 1; ?>
                <?php while ($multiplicador <= 10): ?>
                    <tr>
                        <td>4 × <?= $multiplicador ?></td>
                        <td><?= 4 * $multiplicador ?></td>
                    </tr>
                    <?php $multiplicador++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
