<?php
    /* Template Name: Quienes_Somos*/ 
    get_header();
?>

  

    <section id="quienes_somos" class="template-section">
      
        <div class="grid invertido">
            <div class="col col_quienes">
                <h1>Nuestra HISTORIA</h1>
                
                <p>Basados en nuestra experiencia como inmigrantes en este país, surgimos de la necesidad de ser escuchados y apoyados en nuestro camino hacia la búsqueda de herramientas, información, conocimiento y asistencia para el desarrollo personal, de familia y como comunidad al tener acceso a oportunidades que nos corresponden por el simple hecho de ser seres humanos y ciudadanos del mundo. 
                </p>
            </div>
            <div class="col fondo">
                <img class="flor" src="<?php echo get_stylesheet_directory_uri(); ?>/img/quienes_somos2.jpg" alt="Soluciones">
            </div>
       
         </div>

    </section>
         <section id="mision" class="template-section">

        <div class="contenedor">
            <div class="grid">
                <div class="col">
                   <h2>Nuestra MISIÓN</h2>
                   <p>Brindar soluciones asequibles a la comunidad hispana en Arizona, mediante servicios profesionales de documentación. Permitiendo el acceso a la información de su interés sin importar el idioma, el desconocimiento del uso de la tecnología e incluso el no saber leer o escribir. </p>
                </div>
                <div class="col">
                    <h2>Nuestra VISIÓN</h2>
                   <p>Ser punto de referencia de apoyo y asistencia para la comunidad hispana en Arizona a través de nuestras oficinas fijas y móviles, las cuales llegarán a quién más lo necesite.
 </p>
                    
                </div>
            </div>
        </div>

    </section>
         
        <section id="valores" class="template-section">
<img class="flor" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog.png" alt="Soluciones">
     <h2>VALORES</h2>
       <div class="gris">
        <div class="contenedor">
            
            <div class="grid invertido">
                <div class="col2">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Profesionalismo.png" alt="Acerca">
                  <h3>PROFESIONALISMO</h3>
                    <p>Cada trámite realizado será en tiempo y forma, brindando un excelente servicio y tomando en cuenta las necesidades de cada cliente como individuo.</p>
                </div>
                <div class="col2">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/confianza.png" alt="Acerca">
                  <h3>CONFIANZA</h3>
                    <p>La certeza de que cada servicio contratado será de su entera satisfacción y en pro de una mejora en su vida diaria.</p>
                </div>
                <div class="col2">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/respeto.png" alt="Acerca">
                  <h3>RESPETO</h3>
                    <p>Base de cada servicio
ofrecido.</p>
                </div>
                 
            </div>
        </div>
        </div>

    </section>


  <?php include 'contacto.php'; ?>

<?php 
    get_footer();
?>
