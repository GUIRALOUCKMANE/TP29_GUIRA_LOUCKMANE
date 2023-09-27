<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>


</head>

<body>
   <?php include ("connection.php") ?>
   <?php include ("menu.php") ?>
   
   
      
    </header>
    <section class="loo"> 
      <br>
      <div>
         <img src="region.jpg" alt="" class="a">
         <marquee behavior="" direction="right">
            <h1>BIENVENUE A BANFORA</h1>
         </marquee>
         <marquee behavior="left" direction="">
            <h1>VISITEZ LES SITES TOURISTIQUE</h1>
         </marquee>

      </div>
      <div class="a">
         <h1>Carnaval Banfora</h1>
         <p>Après 10 jours de festivités et d'animation,<br /> la première édition du carnaval Banfora <br /> 2021
            referme ses portes ce 1er août 2021.<br />
            En direct de la Place de la Nation de la belle<br /> cité du Paysan noir, nous assistons<br /> à la
            cérémonie officielle de clôture.<br />
            Restez connectés sur Infos Culture<br /> du Faso pour plus de détails.</p>



      </div>






   </section> 
   <section>
      
      <div class="grid-container">
      
         <?php $reponse=$bdd->query("SELECT * FROM site  where ide=1");
         while( $donnees=$reponse->fetch()){
            ?>
      <div class="ville item">
      
         <img src="<?php echo $donnees['photo'];?>" alt="" class="im">
         <H3><?php echo $donnees['titre'];?></H3>
         <P><?php echo $donnees['description'];?></P>
      </div>

      <?php
   }
      ?>
   </div>


   </section>
   
   
   
   
   <br />
   <?php include ("footer.php") ?>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"></script>
</body>

</html>