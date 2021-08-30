<!doctype html>
<html lang="en">
  <head>
    <title>Editar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <form class="d-flex" action="insertar_datos.php" method="post" >
          <div class="col">
            <h2><b>Datos</b></h2> 
            <div class="mb-3">
              <label for="lbl_codigo" class="form-label"><b>Codigo</b></label>
              <input type="text" name="txt_codigo1" id="txt_codigo1" class="form-control"  required>
            </div>
            <div class="mb-3">
              <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
              <input type="text" name="txt_nombres1" id="txt_nombres1" class="form-control"  required>
            </div>
            <div class="mb-3">
              <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
              <input type="text" name="txt_apellidos1" id="txt_apellidos1" class="form-control"  required>
            </div>
            <div class="mb-3">
              <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
              <input type="text" name="txt_direccion1" id="txt_direccion1" class="form-control"  required>
            </div>
            <div class="mb-3">
              <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
              <input type="number" name="txt_telefono1" id="txt_telefono1" class="form-control"  required>
            </div>
            <div class="mb-3">
              <label for="lbl_direccion" class="form-label"><b>Puesto</b></label>
              <input type="text" name="txt_puesto1" id="txt_puesto1" class="form-control"  required>
            </div>
            <div class="mb-3">
              <label for="lbl_telefono" class="form-label"><b>Fecha nacimiento</b></label>
              <input type="number" name="txt_fn1" id="txt_fn1" class="form-control"  required>
            </div>    
          
        <table class="table table-striped table-inverse table-responsive">
          <thead class="thead-inverse">
          <tr>
              <th><div class="mb-3">
                  <input type="submit" name="btn_aceptar" id="btn_aceptar" class="btn btn-primary" value="Aceptar"> 
              </div></th>
          </tr>
          </thead>   
        </table>  
        </div>
        </form>
        <?php 
        
  
      if(isset($_POST["btn_aceptar"])){
        include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
        $txt_codigo = utf8_decode($_POST["txt_codigo"]); 
        
        $sql="SELECT e.id_empleados as id, e.codigo, e.nombres, e.apellidos, e.direccion, e.telefono, p.puesto, e.fecha_nacimiento
        FROM empleados as e inner join puestos as p on e.id_puesto = p.id_puesto  where e.codigo = $txt_codigo;";  
      
      if($db_conexion->query($sql)===true){
        $db_conexion->close();
        echo"Exito";
        header('Refrech:0');
      }else{
        echo"Error".$sql. "<br>".$db_conexion->close();   
      }
      }
 ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
