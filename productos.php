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
    <!-- Tabla de productos -->
    <div id="productos">
        <?php
            //incluimos la libreria kint
            //include 'inc/kint.phar';

            //Conectamos a base de datos
            try {
                $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
                $dsn = "mysql:host=localhost;dbname=tienda";
                $con = new PDO($dsn, "root", "", $opc);
            } catch (PDOException $e) {
                $error = $e->getCode();
                $mensaje = $e->getMessage();
            }

            //si no han existido errores en la conexión rescatamos los datos la 
            //tabla productos
            if (!isset($error)) {
                //creamos la consulta
                $sql = 'SELECT id, cod, nombre, PVP FROM producto';
                //obtenemos los resultados de la consulta
                $resultado = $con->query($sql);

                //d($resultado->fetchAll(PDO::FETCH_ASSOC));
                //!d(json_encode($resultado->fetchAll()));
                
                if (isset($resultado)) {
                    //por casa resultado obtenido vamos añadiendo una fila a la tabla
                    //recorremos resultado fila a fila
                    $row = $resultado->fetch();
                    echo "<table class='table'>";
                    echo "<thead><tr><th scope='col'>COD</th><th scope='col'>Nombre</th><th scope='col'>PVP</th></tr></thead>";
                    while ($row != null) {
                        echo "<tr>";
                            echo "<td>${row['cod']}</td>";
                            echo "<td>${row['nombre']}</td>";
                            echo "<td>${row['PVP']}</td>";
                        echo "</tr>";
                        $row = $resultado->fetch();
                    }
                    echo "</table>";
                }
            }
        ?>
    </div>

</body>

</html>