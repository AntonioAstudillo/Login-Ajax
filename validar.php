<?php


if(isset($_POST['nombre'],$_POST['password'])){
   $nombre =  $_POST['nombre'];
   $pass =  $_POST['password'];
   $conexion = new Mysqli('localhost','root','','agenda');
   $consulta = "SELECT * FROM contactos WHERE nombre ='$nombre' and telefono = '$pass' ";
   $resultado = $conexion->query($consulta);

   if($resultado->num_rows == 1){
      echo "TRUE";
   }else{
      echo "FALSE";
   }
}else{
   echo "No llegaron los datos";
}



 ?>
