<?php
    $trabajador3 = array("nombre"=>$_POST['nombre3'], 
                         "apellido"=>$_POST['apellido3'], 
                         "CI"=>$_POST['CI3'],
                         "salario"=>$_POST['salario3'], 
                         "departamento"=>$_POST['departamento3'],
                         "lugar"=>$_POST['lugar3']);
    echo "<h2 align='center'>Trabajadores</h2>";
    if(!empty($trabajador3["nombre"]) or !empty($trabajador3["CI"])){
        foreach($trabajador3 as $categoria=>$dato){
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