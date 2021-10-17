<?php
    $trabajador2 = array("nombre"=>$_POST['nombre2'], 
                        "apellido"=>$_POST['apellido2'], 
                        "CI"=>$_POST['CI2'],
                        "salario"=>$_POST['salario2'], 
                        "departamento"=>$_POST['departamento2'],
                        "lugar"=>$_POST['lugar2']);
    echo "<h2 align='center'>Trabajadores</h2>";
    if(!empty($trabajador2["nombre"]) or !empty($trabajador2["CI"])){
        foreach($trabajador2 as $categoria=>$dato){
            echo "<h3>El " .$categoria. " es ". $dato . "</h3>";
            echo "<br>";
        }
        echo "<h4>Trabajador Guardado";
    }
    else{
        die ("No hay datos del trabajador");
    }
    echo "<br>";
    echo "<a href='index.html'>Regresar</a>";
?>