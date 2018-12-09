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


<section class="container-wide" style="color:#1d5289; height:500px;">
<br><br><br>
<img class="img-responsive" style="position:absolute;right:0px; padding-right:200px; opacity: 1; width:45%;" src="Recursos/img/conocenos.png">   
    <div class="row" style="width: 80%; ">
        <h1 style="font-family: 'Poly', serif; ">Prevenir para construir tu futuro.</h1>
            
            <p>Somos un outsourcing que brinda asesoría en la gestión contable, tributaria, financiera y gestión empresarial.
        Tenemos como objetivo principal dar orden y conocimiento a nuestros clientes para que así puedan progresar y tener
        un crecimiento constante. 
        
        </p>



        
    </div>
</section>

<section class="container-wide" style="color:#1d5289;">

    <div class="row" style="width: 60%;">

        <h3 class="center-align" style="font-family: 'Poly', serif;">Nuestro Equipo</h3>
        <br><br><br>


        <div class="col s12 m4">
            <div>
                <img src="Recursos/img/Rog.jpg" alt="" class="circle responsive-img">
             </div>
             <div class="center-align">
                <p  style="font-size:14pt; font-weight:600; font-family: 'Poly', serif; margin:5px;">Rogger Siancas</p>
                    Asesor Contable
                <br><br>
             </div>
        </div>

      

        <div class="col s12 m4" >
             <div>
                <img src="Recursos/img/Yes.jpg" alt="" class="circle responsive-img">
             </div>
             <div class="center-align">
                <p  style="font-size:14pt; font-weight:600; font-family: 'Poly', serif; margin:5px;">Yesenia Siancas</p>
                    Gerente General
                <br><br>
             </div>
        </div>

     

        <div class="col s12 m4">
             
            <div>
                <img src="Recursos/img/Nat.jpg" alt="" class="circle responsive-img">
             </div>
             <div class="center-align">
                <p  style="font-size:14pt; font-weight:600; font-family: 'Poly', serif; margin:5px;">Nataly Siancas</p>
                    Asesora Contable
                    <br><br>
             </div>
        </div>

        
    </div>
</section>

<section class="container-wide" style="color:#1d5289;">
<br><br><br>

    <div class="row" style="width: 80%;">
    <h3 class="center-align" style="font-family: 'Poly', serif;">Más de nosotros</h3>
    <br>
                <div class="col m12 s12" style="">                    
                    <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YjkRSlTxsZM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>                    
                </div>

    </div>
    <br><br><br>
</section>

   















<!--   Pie de página -->

<?php 
include_once './View/Plantillas/pie.php';
?>



</body>
</html>