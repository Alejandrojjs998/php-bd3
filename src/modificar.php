<?php
session_start();
if (isset($_GET['dni'])) {
    $dni=$_GET['dni'];
    $_SESSION['dni']=$dni;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formuario para modificacion de notas</h2>
    <form action="accion.php" method="post">
        <label for="">Introduce notas base de datos: </label>
        <input type="text" name="bbdd"><br>
        <label for="">Introduce notas lenguaje de marcas</label>
        <input type="text" name="lnd"><br>
        <label for="">Introduce Notas programación</label>
        <input type="text" name="pro"><br>
        <input type="submit" value="Actualizar">
    </form>
    <form action="listar.php" method="post">
        <input type="submit" value="Continuar">
    </form>
    <form action="index.php" method="post">
        <input type="submit" value="Volver al menú principal">
    </form>
</body>
</html>