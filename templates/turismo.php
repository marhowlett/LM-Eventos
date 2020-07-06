 <?php
    /* Template Name: Turismo */ 
    get_header();
?>
 <?php echo do_shortcode( '[rev_slider alias="hdiaz"]' ); ?>
 
 <section id="learn" class="template-section">

        
                    <h2>Learn about the culture and gastronomy <br>
of our beautiful country</h2>
                    

               
    </section>
    
    <section id="contacto2" class="template-section">

        <div class="contenedor">


            <div class="grid">

                <div class="col">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo">
                       <h2>Contact us now!</h2>
                     <?php echo do_shortcode( '[caldera_form id="CF5d03dd6be3243"]' ); ?>
                     <p> <img class="email" src="<?php echo get_stylesheet_directory_uri(); ?>/img/email 2 copia.png" alt="Logo">contacto@dentalmexicocity.com</p>

                </div>
                <div class="col prueba_col">
                   <h2>Make a reservation! <br>
<span>In just 3 simple steps</span> </h2>
                
                     <ol>

                    <li >Contact us, <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/email 3.png" alt="Iconos"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skype - copia.png" alt="Iconos"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatssap - copia.png" alt="Iconos"></li>
                    <li>Receive an estimate for your case*</li>
                    <li class="we"> *We can solicitate exams such as a CT scan, Xrays, to make an evealuation of your case</li>
                    

</ol>
                </div>


            </div>
        </div>
    </section>
    
        <section id="card2" class="template-section">

            <div class="grid">

              
                <div class="col prueba_col">
                 <div class="pay2">
                  <h2>Payments are made <br>
<span>in our facilities and <br>
we accept</span></h2>
                    </div>
                     <ol>

                    <li ><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dinero - copia.png" alt="Iconos"> USD in cash </li>
                    <li ><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tarjeta - copia.png" alt="Iconos"> Debit & Credit Cards </li>
                    <li ><img class="pay" src="<?php echo get_stylesheet_directory_uri(); ?>/img/paypal - copia.png" alt="Iconos"> Paypal </li>
                    

</ol>
                 
               
                </div>
                  <div class="col fondo">
                   

                </div>


            </div>
      
    </section>


<?php 
    get_footer();
?>