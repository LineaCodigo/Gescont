<!DOCTYPE html>
<html>
<head>

     <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!-- Script / Recurso de la página actual-->

      <link rel="stylesheet" type="text/css" media="screen" href="Recursos/css/portada.css" />

      <!-- -------------------------- -->

      <script>


 
         /* Script de carrusel slider página principal */

           $(document).ready(function(){


            /* Efecto objetos scroll vertical mouse */   

            // var config = {
            // enter: 'right',
            // wait: '0.5s',
            // move: '20px'
            // }  

            window.sr = ScrollReveal({
                reset: true,
                origin: 'bottom',
                enter: 'top',
                distance: '80px',
                duration: 500,

                //wait: '0.3s',
                //mobile: true
            });
            //sr.reveal('.tarjeta1');
            sr.reveal('.tarjeta1', { delay: 700 });
            sr.reveal('.tarjeta2', { delay: 1200 });
            sr.reveal('.tarjeta3', { delay: 1400 });
            sr.reveal('.tarjeta4', { delay: 1600 });
            sr.reveal('.tarjeta5', { delay: 1800 });
            sr.reveal('.tarjeta6', { delay: 2000 });

            /* ----------------------------- */     

              $('.sidenav').sidenav();

              $('.carousel.carousel-slider').carousel({
                    fullWidth: true,
                    indicators: true,                    
              });

              $('.slider').slider({
                height: 540
              });

         /* Script de carrusel video historias página principal */                  
              
              $('.sliderx').bxSlider({
                    mode: 'horizontal',
                    auto: true,
                    pause: 4000,
                    slideWidth: 1000

              }); 
                                    

          });


        
      </script>

      <style>
      
         .embed-container{
         position:relative;
         padding-bottom:75%;
         height:0;
         overflow: hidden;
        }

        .embed-container iframe{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;

        }
      </style>


</head>
<body>

    <!-- Plant. código para cuerpo  -->
    <?php include_once './View/Plantillas/cuerpo.php'; ?>
    <!-- --> 


<?php 
 include_once './View/Plantillas/menu.php';
 ?>


<!-- Botón flotante de mensajeria  -->

<?php 
 include_once './View/Plantillas/mensajeria.php';
?>

 <!--  Hacer slider principal con mZ   -->

            <div class="slider">
                <ul class="slides">
                <li>
                    <img id="img1" src="Recursos/img/Portada.jpg"> 
                    <!-- random image -->
                    <!-- <div class="caption center-align"> -->
                    <div id="txtporta" class="caption right-align">
                        <h4 style="padding-top: 50px;color:#1d5289;font-family: 'Poly', serif; font-size:30pt;"><b>Prevenir</b> es no mirar atrás.</h4>
                        <a class="waves-effect waves-light btn-large" style="background-color:#1d5289; font-weight:600;">Conócenos</a>
                    </div>                    
                </li>
                
                </ul>                

            </div>
            

  <!-- ----------------------------- -->
  
 
 
<section class="container " style="background-color:#ffffff;">

<h2 class="center-align" style="color:#1d5289; font-family: 'Poly', serif; font-size:42pt;">Servicios</h2>
<br><br>
<div class="row center-align" style="color:#1d5289;  ">
    <!-- <div class="col s12 m4 l4">
        <h5 class="" style="font-family: 'Poly', serif; font-size:20pt;">Outsourcing empresarial</h5>
        <p style="font-size:14pt;">Para una organización más eficiente, competitiva y rentable.</p>
        <a class="link" href="" >Conoce más</a>
    </div> -->

    <div class="col s12 m4">
        <div class="card white hoverable tarjeta1">
          <div class="card-content" style="background-color:white; height:270px; cursor: pointer;">
            <div class="card-title">
                <h5 class="" style="font-family: 'Poly', serif; font-size:20pt;">Outsourcing empresarial</h5>
            </div>
            <p style="font-size:14pt; margin-bottom: 20px;">Para una organización más eficiente, competitiva y rentable.</p>
            <!-- <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a> -->
            <a class="link" href="#">Conoce más</a>  
          </div>        
        </div>
    </div>
    
    
    <div class="col s12 m4">
        <div class="card white hoverable tarjeta2">
          <div class="card-content" style="background-color:white; height:270px; cursor: pointer;">
            <div class="card-title">
                <h5 class="" style="font-family: 'Poly', serif; font-size:20pt;">Asesoría en la gestión contable</h5>
            </div>
            <p style="font-size:14pt; margin-bottom: 20px;">Para la toma de decisiones en relación con la administración de su empresa.</p>
            <!-- <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a> -->
            <a class="link" href="#">Conoce más</a>  
          </div>        
        </div>
    </div>

    <div class="col s12 m4">
        <div class="card white hoverable tarjeta3">
          <div class="card-content" style="background-color:white; height:270px; cursor: pointer;">
            <div class="card-title">
                <h5 class="" style="font-family: 'Poly', serif; font-size:20pt;">Asesoría tributaria</h5>
            </div>
            <p style="font-size:14pt; margin-bottom: 20px;">Administración tributaria para un óptimo cumplimiento con entidades públicas.</p>
            <!-- <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a> -->
            <a class="link" href="#">Conoce más</a>  
          </div>        
        </div>
    </div>

    <div class="col s12 m4">
        <div class="card white hoverable tarjeta4">
          <div class="card-content" style="background-color:white; height:270px; cursor: pointer;">
            <div class="card-title">
                <h5 class="" style="font-family: 'Poly', serif; font-size:20pt;">Asesoría laboral</h5>
            </div>
            <p style="font-size:14pt; margin-bottom: 20px;">Estrategias para una buena interrelación entre la empresa y el personal.</p>
            <!-- <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a> -->
            <a class="link" href="#">Conoce más</a>  
          </div>        
        </div>
    </div>

    <div class="col s12 m4">
        <div class="card white hoverable tarjeta5">
          <div class="card-content" style="background-color:white; height:270px; cursor: pointer;">
            <div class="card-title">
                <h5 class="" style="font-family: 'Poly', serif; font-size:20pt;">Gestión de cobranzas y pagos</h5>
            </div>
            <p style="font-size:14pt; margin-bottom: 20px;">Implementación de procesos que ayuden a la disponibilidad de dinero.</p>
            <!-- <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a> -->
            <a class="link" href="#">Conoce más</a>  
          </div>        
        </div>
    </div>

    <div class="col s12 m4">
        <div class="card white hoverable tarjeta6">
          <div class="card-content" style="background-color:white; height:270px; cursor: pointer;">
            <div class="card-title">
                <h5 class="" style="font-family: 'Poly', serif; font-size:20pt;">Servicio de facturación</h5>
            </div>
            <p style="font-size:14pt; margin-bottom: 10px;">Organización de los procesos de facturación desde la emisión de la orden de compra.</p>
            <!-- <a class="waves-effect waves-light btn-small " href="#" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a> -->
            <a class="link" href="#">Conoce más</a>  
          </div>        
        </div>
    </div>


</div>

<br><br>

</section>




<section class="container-wide" style="background-color:#1d5289; color:#ffffff">
  <br>
  <div class="row">

    <div class="col s12 m1">
    </div>  

    <div class="col s12 m10">
        <h2 class="center-align" style="font-family: 'Poly', serif; font-size:42pt;" >Nuestro equipo .</h2>
        <p class="center-align"style="font-size:11pt;">Sabemos que nuestro principal propósito es dar a nuestros clientes orden y conocimiento en su gestión contable, para así, pevenir futuros problemas y garantizar un rápido crecimiento en el mercado competitivo de hoy.</p>
    </div>  

    
    <div class="col s12 m1">
    </div>  
  
  </div>


    <div class="container" style="padding-top: 2rem;">
        
        <div class="row valign-wrapper">

            <div class="col s12 m3">
                <img src="Recursos/img/yesenia.jpg" alt="" class="circle responsive-img">                
            </div>

            <div class="col s12 m9" style="color: white;">
                <h4 style="font-family: 'Poly', serif; font-size:22pt;">Yesenia Siancas</h4>
                <h6><u>Gerente general y consultora contable</u></h6>
                <p>"No queremos darte una solución cuando ya el problema se dió, queremos anticiparnos dándote orden y conocimiento para que no tengas esos problemas."</p>
                <a href="./una-foto-una-prueba-de-tu-amor" class="waves-effect waves-light btn" style="background-color: white;color:#1d5289;">Conóceme</a>
            </div>

        </div>             

  </div>


<br>
<br>
<br>
<br>


</section>


  <!-- ----------------------------- -->


 <!--   Pie de página -->

<?php 
 include_once './View/Plantillas/pie.php';
 ?>



</body>
</html>