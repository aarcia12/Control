<?php
session_start();
include("conex.php");

if(isset($_POST['fecha']) && isset($_POST['destino']))
      {
    echo "1";
         $fecha=date("y-m-d");         
         $destino = $_POST['destino']; 
         $asunto = $_POST['asunto'];             
         $responsable=$_POST['responsable'];             
         $observacion= $_POST['observacion'];             
         $N_nota = $_POST['N_nota'];               
         $sql= "INSERT INTO tramites(fecha,destino,asunto,responsable,observacion,N_nota) values('".$fecha."','".$destino."','".$asunto."','".$responsable."','".$observacion."','".$N_nota."')"; 
    
         $datos= mysqli_query($mysqli,$sql);    
        
}
  
  
?>




<html>


         <br>
        <br>
           <link rel="stylesheet" href="css/estilo1.css">
           <body>
           <form action="welcome.php" method="post" >
                  <h2>Control de Oficio</h2>
            <label for="fecha" class="fecha">Fecha</label>
            <input id="fecha" name="fecha" type="date">

            <label for="No.Nota" class="No.Nota">No.Nota</label>
            <input id="N_nota" name="N_nota" type="text">

            <label for="Destinatario">Destinatario</label>
            <input id="destino" name="destino" type="text">

            <label for="Asunto">Asunto</label>
            <input id="asunto" name="asunto"type="text">

            <label for="Responsable">Responsable</label>
            <input id="responsable" name="responsable"type="text">
               
            <label for="Observacion">Observacion</label>
            <input id="observacion" name="observacion" type="text">
            <input type="submit" class="btn btn-info btn-block" value="Guardar">
        </form>
    </body>          
    </html>
    