<?php
    include_once 'persona.php';

    class ApiPersona{
        function obtenerTodasPersonas(){
            $persona = new Persona();
            $personas ["i"] = array();

            $res = $persona->obtenerPersonas();
            $countPeople =mysqli_num_rows($res);

            if($countPeople>0){
                while ($row = $res -> fetch_array(MYSQLI_ASSOC)){
                    $item = array(
                        'id' => $row ['id_personas'],
                        'nombre' => $row ['nombre_personas'],
                        'apellido' => $row ['apellido_personas'],
                        'edad' => $row ['edad_personas'],
                        'sexo' => $row ['sexo_personas'],
                        'email' => $row ['email_personas']
                    );
                    array_push($personas['i'], $item);
                }
                echo json_encode($personas);
            }else{
                echo json_encode(array('mensaje'=> 'No hay ningun elemento'));
            }
        }
    }
?>