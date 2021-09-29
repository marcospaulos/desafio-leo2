<?php
 require_once 'conecta.php';

if($_POST) {

    $bd = new conecta();

    $connect = $bd->conecta();
    
    $curso = $_POST['curso'];
    $descricao = $_POST['descicao'];
    $img = $_POST['img'];
    $titulo = $_POST['titulo'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE tb_leo SET curso = '$curso', descricao = '$descricao', img = '$img', titulo = '$titulo' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $bd->close($connect);
 
}


?>