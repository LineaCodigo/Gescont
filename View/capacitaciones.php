<!DOCTYPE html>
<html>
<head>


     <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!-- Script / Recurso de la página actual-->
      

      <link rel="stylesheet" type="text/css" media="screen" href="Recursos/css/portada.css" />

      <!-- -------------------------- -->



      <style>
         
      </style>
        
        
     

</head>
<body >
    <!-- Plant. código para cuerpo  -->
    <?php include_once './View/Plantillas/cuerpo.php'; ?>
    <!-- --> 


<?php 
 include_once './View/Plantillas/menu.php';
 ?>


<?php 
 include_once './View/Plantillas/mensajeria.php';
?>


<section class="container-wide" style="color:#1d5289;">
<br><br><br>
    
<div class="row" style="width: 70%;">
    
        <div class="col s12 m12  card" style="background-color: #1d5289;" >
            
                
                    <div class="col s12 m3 card-content"  >
                        <span style="font-size:20pt; font-weight:500; color:#72889d;">16:00 - 18:30</span><br>
                        <span style="font-size:12pt; font-weight:500; color:#72889d;">16 de Nov - 21 de Nov</span>
                    </div>

                    <div class="col s12 m9 card-title" style="background-color:white;">
                    
                        <span style="font-size:24pt; font-weight:600;">Asesoría Tributaria</span>
                        <p style="font-size:12pt; font-weight:400;">I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    
                    
                        <p class="right-align" style="padding:20px;">
                            <a class="waves-effect waves-light btn-large" style="background-color:#1d5289; font-weight:600;">Reservar</a>
                        </p>
                    </div>
            
        </div>
  
</div>

</section>



<!--   Pie de página -->

<?php 
include_once './View/Plantillas/pie.php';
?>



</body>
</html>