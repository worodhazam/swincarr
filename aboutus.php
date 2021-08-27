<!DOCOTYPE html>
<html Lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alma international</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://kit.fontawesome.com/667a53b4d0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
  font-awesome.min.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  
   <body>
  <section class="navigation">
    
<?php
include 'navigation.php';
?>

  </section>
   <section class="navi">
    
<?php
include 'nav.php';
?>

  </section>
  <section>
    <?php
    include 'Concept1.php';
    ?>
  </section>

     <section>
    <?php
    include 'application.php';
    ?>
  </section>
    <section>
    <?php
    include 'models.php';
    ?>
  </section>



<section>
    
<?php
include 'footer.php';
?>

</section>


   </body>
   INITIALIZE AOS
<script>
  AOS.init();
</script>
</html>