<?php

$servidor = "localhost"; 
$usuario = "root"; 
$contrasenha = ""; 
$BD = "php"; 
 

 
$conexion = mysqli_connect($servidor, $usuario, $contrasenha,$BD); 
 
$marca=$_POST["marca"];

 
if (!$conexion) { 
    die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 
    $sentencia = 'SELECT * FROM coche where marca="'.$marca.'"';
    $resultado = mysqli_query( $conexion,$sentencia); 

    
    
    echo '<option value="seleccionar">selecciona modelo</option>'; 
    $salida=""; 
  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
   
      //echo '<option value="'.$fila["modelo"].'">'.$fila["modelo"].'</option>';
      if(strpos($salida,'<option value="'.$fila["modelo"].'">'.$fila["modelo"].'</option>')===false){
        $salida=$salida.'<option value="'.$fila["modelo"].'">'.$fila["modelo"].'</option>';
      }
      //$salida=$salida.'<option value="'.$fila["modelo"].'">'.$fila["modelo"].'</option>';
    
    
  }
  
  echo $salida;
  
}














   

?>