<?php
    $trabajador1 = array("nombre"=>$_POST['nombre1'], 
                         "apellido"=>$_POST['apellido1'], 
                         "CI"=>$_POST['CI1'],
                         "salario"=>$_POST['salario1'], 
                         "departamento"=>$_POST['departamento1'],
                         "lugar"=>$_POST['lugar1']);
    echo "<h1 align='center'>Trabajadores</h1>";
    if(!empty($trabajador1["nombre"]) or !empty($trabajador1["CI"])){
        foreach($trabajador1 as $categoria=>$dato){
            echo "<h3>El " .$categoria. " es ". $dato . "</h3>";
            echo "<br>";
        }
        echo "<h4>Trabajador Guardado";
    }
    else{
        echo "No hay datos del trabajador";
    }
    echo "<br>";
    echo "<a href='index.html'>Regresar</a>";
?>