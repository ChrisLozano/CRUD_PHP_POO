<?php

Class LibroVisitas{
    
    private $records;
    
    public function __construct(){
        $this->records=array();
    }
    
    public function get_rows(){
        $sql = "SELECT * FROM libro_de_visitas ORDER BY id DESC";
        $result = mysql_query($sql,Conexion::conectar());
        while($row = mysql_fetch_assoc($result)){
            $this->records[]=$row;
        }
        return $this->records;
    }
    
    public function add_row($nombre, $mensaje){
        $sql="INSERT INTO libro_de_visitas VALUES (NULL, '$nombre', '$mensaje', NOW(), NOW())";
        $result = mysql_query($sql, Conexion::conectar());
        echo ' <script type=text/javascript>
              alert("Gracias por escribir en nuestro de records");
              window.location= "index.php"
              </script>';
    }
    
    public function get_row_by_id($id) {
        $sql = "SELECT * FROM libro_de_visitas WHERE id = $id";
        $result = mysql_query($sql, Conexion::conectar());
        $row = mysql_fetch_assoc($result);
        $this->records[]= $row;
        return $this->records;
     
    } 
    
    public function update_reg($id, $nombre, $mensaje) {
        $sql = "UPDATE libro_de_visitas SET nombre = '$nombre', mensaje = '$mensaje', fecha = NOW(), hora = NOW() WHERE id=$id";
        $result = mysql_query($sql, Conexion::conectar());
        echo ' <script type=text/javascript>
              alert("Registro actualizado correctamente");
              window.location= "index.php"
              </script>';
        
    }

    public function delete_reg($id){
        $sql = "DELETE FROM libro_de_visitas WHERE id=$id";
        $result = mysql_query($sql, Conexion::conectar());
          echo ' <script type=text/javascript>
              alert("Registro eliminado con exito");
              window.location= "index.php"
              </script>';
    }
    
    
}

?>