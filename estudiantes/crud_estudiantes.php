<?php
     
     if( !empty($_POST) ){
   
     //print_r( $_POST );
       // echo "<hr/>";
       $txt_id = utf8_decode($_POST["txt_id"]);
       $txt_carnet = utf8_decode($_POST["txt_carnet"]);
       $txt_nombres = utf8_decode($_POST["txt_nombres"]);
        $txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
        $txt_direccion = utf8_decode($_POST["txt_direccion"]);
        $txt_telefono = utf8_decode($_POST["txt_telefono"]);
        $drop_genero = utf8_decode($_POST["drop_genero"]);
        $drop_email = utf8_decode($_POST["drop_email"]);
        $txt_fn = utf8_decode($_POST["txt_fn"]);
      include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
        $sql ="";
        if(isset($_POST['btn_agregar'])  ){
          $sql = "INSERT INTO estudiantes(carnet,nombres,apellidos,direccion,telefono,genero,email,fecha_nacimiento) VALUES ('". $txt_carnet ."','". $txt_nombres ."','". $txt_apellidos ."','". $txt_direccion ."','". $txt_telefono ."','". $txt_genero ."',". $drop_email .",'". $txt_fn ."');";
        }
        if( isset($_POST['btn_modificar'])  ){
          $sql = "update estudiantes set carnet='". $txt_carnet ."',nombres='". $txt_nombres ."',apellidos='". $txt_apellidos ."',direccion='". $txt_direccion ."',telefono='". $txt_telefono ."',genero='". $txt_genero ."',email='". $txt_email ."',fecha_nacimiento='". $txt_fn ."';";
        }
        if( isset($_POST['btn_eliminar'])  ){
          $sql = "delete from estudiantes  where id_estudiantes = ". $txt_id.";";
        }
         
          if ($db_conexion->query($sql)===true){
            $db_conexion->close();
           
            header('Location: /escuela_20022');
           
           
          }else{
            $db_conexion->close();
          
          }

      }
     
    
      
      ?>