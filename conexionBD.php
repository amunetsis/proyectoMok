<?php
 
class ConexionBD{
    function conexionDB(){
        $servidor ="localhost:3307";
        $nombreusuario = "root";
        $password = "";
        $db = "crudmok";
        $conexion = new mysqli($servidor,$nombreusuario,$password,$db) or die ("Error de conexion");
        return $conexion;
    }
    
/*    if(conexionDB()-> connect_error){
        die("Fallo en la conexion: ". conexionDB() ->connect_error);
    }else{
        echo 'Conexion exitosa';
    }*/
}
?>