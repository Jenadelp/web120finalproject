<?php include "includes/header.php"?>


<section>
<div class="contact">
  

 <h2 class="Contactme"> Contact Body n' Soul</h2>
    
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "bodynsoul3@gmail.com";  //place your/your client's email address here
        $toName = "Michelle Delp"; //place your client's name here
        $website = "developedbyjena.com/web120/template/contact.php";  //place NAME of your client's website

        echo loadContact('multiple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>    



</div>
</section>


    
  
 
 
<?php include "includes/footer.php"?>