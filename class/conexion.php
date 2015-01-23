<?php
Class Conexion{
    
    public static function conectar(){
        
        $server = "localhost";
        $user = "root";
        $password = "12345";
        $database = "trabajo_curso";

        $con = mysql_connect($server, $user, $password) or die ("Error de conexion al Servidor");
        mysql_query("SET NAMES 'utf8'");
        mysql_select_db($database) or die("La base de datos no existe");
		
        return $con;
        
}        

}
?>