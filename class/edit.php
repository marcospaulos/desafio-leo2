<?php

require_once 'conecta.php';


if($_GET['id']) {

    $bd = new conecta();

    $connect = $bd->conecta();

    $id = $_GET['id'];
 
    $sql = "SELECT * FROM tb_leo WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $bd->close($connect);

    ?>
 
 <!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Edit Member</legend>
 
    <form action="update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="curso" placeholder="curso" value="<?php echo $data['curso'] ?>" /></td>
            </tr>     
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="descicao" placeholder="descicao" value="<?php echo $data['descicao'] ?>" /></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="img" placeholder="Img" value="<?php echo $data['img'] ?>" /></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="titulo" placeholder="titulo" value="<?php echo $data['titulo'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 

 <?   
}
?>