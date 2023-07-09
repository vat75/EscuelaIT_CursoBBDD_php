<?php
include './vendor/autoload.php';
include './includes/enviroment.php';
include './includes/templates.php';
include './includes/conection-db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <?php
        $mysqli = generateConection();
        $id = $_GET["id"] ?? null;
        if ($id && ctype_digit($id)) {
            $mysqli->real_escape_string($id);
            $ssql = "SELECT * FROM customers WHERE id = {$id}";
            $result = $mysqli->query($ssql);
            if ($result->num_rows == 0) {
                echo '<p>No he encontrado ese elemnto</p>';
            } else {
                $customers = $result->fetch_assoc();
                echo $templates->render('customer-form', [
                    'formTitle' => 'Editar un Cliente',
                    'label' => 'Guardar',
                    'action' => 'editar.php',
                    'old' => $customers,
                ]);
            }
        } else {
            echo '<p>No he recibido el identificador</p>';
        }
        ?>
        <p>
            <a href=".">Volver</a>
        </p>
    </div>


</body>

</html>