<!DOCTYPE HTML>
<?php
require_once 'Class/class.php';
?>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
     <script src="js/functions.js"></script>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']== 'GET'){
        $listar = new LibroVisitas();
        $visitas = $listar->get_row_by_id($_GET['id']);
    }
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $listar = new LibroVisitas();
        $visitas = $listar->update_reg($_POST['id'],$_POST['nombre'], $_POST['mensaje']);
      
    }
    ?>
    
   <h1>GuestBook</h1>
    <h2>Edit comment:</h2>
    <form  name="form" method="post" action="">
        <input type="hidden" name="id" value="<?php echo $visitas[0]['id'] ?>">
        <label>Name</label>
        <input type="text" name="nombre" value="<?php echo $visitas[0]['nombre'] ?>">
        <br>
        <label>Message </label>
        <br>
        <textarea name="mensaje" cols="50" rows="10" style="resize: none;"> <?php echo $visitas[0]['mensaje'] ?></textarea>
        <br>
        <input type="button" value="Update" onclick="validar();">
        <br>
        <input type="button" Value="Back" onclick="window.location='index.php'">
    </form>    
</body>
</html>