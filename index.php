<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo -->
    <title>Prueba de Kint para hacer debug en PHP</title>
    <!-- CSS Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
        //incluimos kint (recuerda, no esta descargado en el repositorio)
        //include 'inc/kint.phar';

        //d($_POST);

        //controlamos el envio de la variable nombre del formulario y si es asi, que no este vacio
        //en caso afirmativo, pues mostramos un mensaje
        if (isset($_POST['nombre']) && (($_POST['nombre']) != '')) {
            echo '<h1>Hola' . ' ' . $_POST['nombre'] . ' ' . $_POST['apellidos'] . '</h1>';
        };
    ?>

    <!-- Formulario -->
    <form method="POST" action="index.php">
        <div class="mb-3">
            <label for="nombre" class="form-label"><strong>Nombre:</strong></label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label"><strong>Apellidos:</strong></label>
            <input type="text" class="form-control" name="apellidos">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="check">
            <label class="form-check-label" for="check"><strong>check</strong></label>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

</body>

</html>