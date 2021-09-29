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
    <title>Remove Member</title>
</head>
<body>
 
<h3>Do you really want to remove ?</h3>
<form action="php_action/remove.php" method="post">
 
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="index.php"><button type="button">Back</button></a>
</form>
 
</body>
</html>
 
<?php
}
?>