<?php
      include("datos_conexion.php");
      $db_conexion1 = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
      $txt_codigo1 = utf8_decode($_POST["txt_codigo1"]); 
      $txt_nombres1 = utf8_decode($_POST["txt_nombres1"]);
      $txt_apellidos1 = utf8_decode($_POST["txt_apellidos1"]);
      $txt_direccion1 = utf8_decode($_POST["txt_direccion1"]);
      $txt_telefono1 = utf8_decode($_POST["txt_telefono1"]);
      $txt_puesto1 = utf8_decode($_POST["txt_puesto1"]);
      $txt_fn1 = utf8_decode($_POST["txt_fn1"]);
      $sql="INSERT INTO empleados(codigo, nombres, apellidos, direccion, telefono, fecha_nacimiento, id_puesto)
      VALUES
       ('".$txt_codigo1."', '".$txt_nombres1."', '".$txt_apellidos1."', '".$txt_direccion1."', '".$txt_telefono1."', '".$txt_fn1."', ".$txt_puesto1." );";  
    
    if($db_conexion->query($sql)===true){
      $db_conexion->close();
      header('Location: index.php');
    }else{
      echo"Error".$sql. "<br>".$db_conexion->close();   
    }
?>