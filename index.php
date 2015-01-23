<!DOCTYPE HTML>
<?php
require_once 'class/class.php';
?>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Libro de Visitas</title>
    <script src="js/functions.js"></script>
</head>
<body>
    <h1>GuestBook</h1>
    <h2>Post your comment:</h2>
    <form  name="form" method="post" action="">
        <label>Name</label>
        <input type="text" name="nombre">
        <br>
        <label>Message </label>
        <br>
        <textarea name="mensaje" cols="50" rows="10" style="resize: none;"></textarea>
        <br>
        <input type="button" value="Post" onclick="validar();">
    </form>   
    <br>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $add = new LibroVisitas();
        $add->add_row($_POST['nombre'], $_POST['mensaje']); 
    }
    ?>
    
    <table width="960" border="0">
  <tr style="background-color:#333; color: white;">
    <th width="176" scope="col">Name</th>
    <th width="479" scope="col">Message</th>
    <th width="96" scope="col">Date</th>
    <th width="95" scope="col">Time</th>
    <th width="48" scope="col">Edit</th>
    <th width="48" scope="col">Delete</th>
  </tr>
    <?php
    $listar = new LibroVisitas();
    $visitas = $listar->get_rows();
    //print_r($visitas);
    for($i=0; $i<sizeof($visitas); $i++){
  ?>
  <tr id="<?php echo $i ?>" style="background-color: #F0F0F0;" onmouseover="cambiar_color('<?php echo $i ?>','#CCC');" onmouseout="cambiar_color('<?php echo $i ?>','#F0F0F0');">
    <td><?php echo $visitas[$i]['nombre'] ?></td>
    <td><?php echo $visitas[$i]['mensaje'] ?></td>
    <td><?php echo $visitas[$i]['fecha'] ?></td>
    <td><?php echo $visitas[$i]['hora'] ?></td>
    <td><a  href="javascript:void(0);"  onClick="window.location = 'edit.php?id=<?php echo $visitas[$i]['id']?>' " title="Edit Registrer"><img src="images/edit.png"> </a></td>
    <td><a  href="javascript:void(0);"  onClick="window.location = 'delete.php?id=<?php echo $visitas[$i]['id']?>'" title="Delete Registrer"><img src="images/delete.png"> </a></td>
  </tr>
   <?php
    }
    ?>
</table>
</body>
</html>