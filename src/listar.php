<?php

$connect= new mysqli("localhost","root","","examen_2122");

if ($connect) {
    $sql="SELECT * FROM datos_personales";
    $result=$connect->query($sql);
    echo"
    <table border=1>
    <tr>
    <th>DNI</th>
    <th>Nombre</th>
    <th>Apellido1</th>
    <th>Apellido2</th>
    <th>Fecha de nacimiento</th>
    <th>provincia</th>
    <th>Poblacion</th>
    <th>tutor</th>
    <th>Boletin de notas</th>
    <th>modificar Notas</th>
    </tr>
    ";
    $fila=$result->fetch_assoc();
    while($fila){
        echo"
        <tr>
        <td>".$fila['dni']."</td>
        <td>".$fila['nombre']."</td>
        <td>".$fila['apellido1']."</td>
        <td>".$fila['apellido2']."</td>
        <td>".$fila['fecha_nacimiento']."</td>
        <td>".$fila['poblacion']."</td>
        <td>".$fila['provincia']."</td>
        <td>".$fila['tutor']."</td>
        <td><a href='mostrar.php?dni=".$fila['dni']."'><img src='foto.png' alt=''></a></td>
        <td><a href='modificar.php?dni=".$fila['dni']."'><img src='foto.png' alt=''></a></td>
        </tr>
        ";
    }
    echo"</table>";
}else{
    echo"error al conectar con la base de datos";
}

?>
