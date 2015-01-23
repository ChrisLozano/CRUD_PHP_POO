<?php
require_once 'Class/class.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    $delete = new LibroVisitas();
    $delete->delete_reg($id);    
}else{
    
}

?>