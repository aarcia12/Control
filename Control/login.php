<?php
   include("conex.php");
   
  
  if(isset($_POST['nombre']) && isset($_POST['pwd']))
  {

      $sql = "SELECT * FROM usuarios WHERE usuario='".$_POST['nombre']."' and pwd='".$_POST['pwd']."'";
      $stmt = mysqli_query( $mysqli, $sql );
      $row = mysqli_fetch_array( $stmt, MYSQLI_ASSOC);
     
      if($row['usuario']!='')
      {
        session_start();
        $_SESSION['usuario'] = $row['usuario'];    

        header('Location: welcome.php');
        exit;
      } 
      else
        $alert_msg = 'El Usuario Y Password son Incorrectos';

  } 
?>



<html>
<head>
<meta name="viewport" content="width=device−width, initial−scale=1.0" />
<body>    
          


</head>
<div class="container">      
   <div class='login'> 
   <h2>Ministerio de Ambiente-Panamá</h2>     
   <h2>Ministerio de Ambiente-Costa Rica</h2> 
   <h2>Unidad Técnico Binacional del PILA</h2> 
   <h2>(UTEB-PILA)</h2> 
   <h2>Iniciar Sección </h2>
   <form action = "" method = "post">
   <input id="nombre" name='nombre' placeholder='Usuario' type='text'/>
   <input id='pwd' name='pwd' placeholder='Contraseña' type='password'/>
   <div class='remember'>
   <input checked='' id='remember' name='remember' type='checkbox'/>
   <label for='remember'></label>Recordar
   </div>
   <input type='submit' value='Iniciar'/>  
   
</div>
</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>
</html>