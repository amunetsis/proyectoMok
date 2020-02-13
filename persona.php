<?php
include_once 'conexionBD.php';

//Incluyo mi conexionBD.php para poder conectarme a la base de datos y asi poder realizar
//querys (consultas), en este caso quiero obtener todas las personas que estan en la tabla PERSONAS
class Persona extends ConexionBD{
    function obtenerPersonas(){
        $getPeople = $this->conexionDB()->query("SELECT * FROM personas");
        return $getPeople;
    }
}
?>