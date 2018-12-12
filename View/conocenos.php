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


<section class="container-wide" style="color:#1d5289; background-image:url(Recursos/img/conocenos.png); background-repeat:no-repeat; background-size: 200px 400px; background-position:990px 70px;">


    <div class="row" style="width: 80%; padding-top:50px;">
    
        <h2 style="font-family: 'Poly', serif; ">Prevenir para construir tu futuro.</h2>
        <br>
            
            <p style="text-align:justify;">Somos un outsourcing que brinda asesoría en la gestión contable, tributaria, financiera y gestión empresarial.
            Tenemos como objetivo principal dar orden y conocimiento a nuestros clientes para que así puedan progresar con
            un crecimiento constante. 
            </p>

            <p style="text-align:justify;">
            Creemos que una gestión contable organizada nos ayuda a <b>prevenir</b> percances a la hora de una auditoría anual o 
            algún trámite con las entidades financieras y tributarias.
            </p>

            <p style="text-align:justify;">
            Es por eso que contamos con los mejores servicios y herramientas para poder construir un futuro sólido y rentable para tu negocio.
            </p>
    </div>
</section>

<section class="container-wide" style="color:#1d5289;">

    <div class="row" style="width: 60%;">

        <h3 class="center-align" style="font-family: 'Poly', serif;">Equipo</h3>
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