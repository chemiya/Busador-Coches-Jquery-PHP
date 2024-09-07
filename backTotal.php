<?php

$servidor = "localhost"; 
$usuario = "root"; 
$contrasenha = ""; 
$BD = "php"; 
 

 
$conexion = mysqli_connect($servidor, $usuario, $contrasenha,$BD); 
 
$marca=$_POST["marca"];
$modelo=$_POST["modelo"];
$agno=$_POST["agno"];
$precioMin=$_POST["precioMin"];
$precioMax=$_POST["precioMax"];
$palabraClave=$_POST["palabraClave"];


 
if (!$conexion) { 
    die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 
    $sentencia = 'SELECT * FROM coche where marca="'.$marca.'" and modelo="'.$modelo.'" and agno="'.$agno.'" and precio>'.$precioMin.' and precio<'.$precioMax;
    $resultado = mysqli_query( $conexion,$sentencia); 

    
    
   echo '<h1 class="titulo">RESULTADOS</h1>';
  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
  
      if(strpos($fila["descripcion"],$palabraClave)!==false){
       echo '<div class="carta mb-3"><h3>'.$fila["marca"].'</h3> <h4>'.$fila["modelo"].'</h4> <h4>'.$fila["agno"].'</h4> <h4>'.$fila["precio"].'</h4></div>';
      }
   
    
  }

 
}