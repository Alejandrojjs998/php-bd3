<?php
if (isset($_GET['dni'])) {
    $dni=$_GET['dni'];
    $connect= new mysqli("localhost","root","","examen_2122");

if ($connect) {
    $sql="SELECT * FROM notas WHERE dni='$dni'";
    $result=$connect->query($sql);
    echo"
    <table border=1>
    <tr>
    <th>Nota base de datoss</th>
    <th>Nota base Lenguaje de marcas</th>
    <th>Nota Programación</th>
    </tr>
    ";
    $fila=$result->fetch_assoc();
    
        echo"
        <tr>
        <td>".$fila['notabae']."</td>
        <td>".$fila['notalnd']."</td>
        <td>".$fila['notaprogramacion']."</td>
        </tr>
     </table>";
}
    
}
?>

<form action="index.php" method="post">
    <input type="submit" value="Menu Principal">
</form>
<form action="listar.php" method="post">
    <input type="submit" value="Continuar">
</form>