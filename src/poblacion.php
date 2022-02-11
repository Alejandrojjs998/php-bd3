<?php

if (isset($_POST['enviar'])) {
    $poblacion=$_POST['poblacion'];

$connect= new mysqli("localhost","root","","examen_2122");

if ($connect) {
    $sql="SELECT * FROM datos_personales WHERE poblacion='$poblacion'";
    $result=$connect->query($sql);
    $fila=$result->fetch_assoc();
    $aux=0;

while ($fila) {
    $aux++;
}
}
if ($aux!=0) {
echo "hay :$aux en: $poblacion";
}else{
    echo"Aqui no vive nadie";
}
}

?>

<form action="poblacion.php" method="post">
    <label for="">Contar alumnos de: </label>
    <select name="poblacion" id="">
        <option value="Telde">Telde</option>
        <option value="Arucas">Arucas</option>
        <option value="La Orotava">La Orotava</option>
        <option value="Firgas">Firgas</option>
    </select>
    <input type="submit" value="enviar" name="enviar">
</form>
<form action="index.php" method="post">
    <input type="submit" value="Menu Principal">
</form>