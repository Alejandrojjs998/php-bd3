<?php
session_start();
if (isset($_POST['bbdd'])&&isset($_POST['lnd'])&&isset($_POST['pro'])) {
$dni=$_SESSION['dni'];
$bbdd=$_POST['bbdd'];
$lnd=$_POST['lnd'];
$pro=$_POST['pro'];
$connect= new mysqli("localhost","root","","examen_2122");

if ($connect) {
    $sql1="UPDATE notas SET notabae='$bbdd' WHERE dni='$dni'";
    $result1=$connect->query($sql1);
    $sql2="UPDATE notas SET notalnd='$lnd' WHERE dni='$dni'";
    $result2=$connect->query($sql2);
    $sql3="UPDATE notas SET notaprogramacion='$pro' WHERE dni='$dni'";
    $result3=$connect->query($sql3);
  
        echo"Operacion realizada con exito";
   
}else {
    echo"Fallo de conexion";
}
}
?>
    <form action="listar.php" method="post">
        <input type="submit" value="Continuar">
    </form>
    <form action="index.php" method="post">
        <input type="submit" value="Volver al menú principal">
    </form>