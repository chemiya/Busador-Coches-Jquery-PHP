<?php

$servidor = "localhost"; 
$usuario = "root"; 
$contrasenha = ""; 
$BD = "php"; 
 

 
$conexion = mysqli_connect($servidor, $usuario, $contrasenha,$BD); 
 
$marca=$_POST["marca"];
$modelo=$_POST["modelo"];


 
if (!$conexion) { 
    die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 
    $sentencia = 'SELECT agno FROM coche where marca="'.$marca.'" and modelo="'.$modelo.'"';
    $resultado = mysqli_query( $conexion,$sentencia); 

    
    
    echo '<option value="seleccionar">selecciona año</option>'; 
    $salida="";
  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
  
      //echo '<option value="'.$fila["agno"].'">'.$fila["agno"].'</option>';
      if(strpos($salida,'<option value="'.$fila["agno"].'">'.$fila["agno"].'</option>')===false){
        $salida=$salida.'<option value="'.$fila["agno"].'">'.$fila["agno"].'</option>';
      }
   
    
  }

  echo $salida;
}