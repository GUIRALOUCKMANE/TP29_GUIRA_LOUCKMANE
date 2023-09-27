<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="service.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



</head>
<body>
<?php include ("menu.php") ?>
<?php include ("connection.php") ?>
<section>
<marquee behavior="" direction="right"><h1>BIENVENUE A ZINIARE UNE VILLE TOURISTIQUE </h1></marquee>
<div>
<img src="bienvenue.jpg" alt="" class="b">
</div>
<div>
<h1 class="c">Ziniaré est une ville et le chef-lieu du département et <br/>la commune urbaine de Ziniaré, située dans la<br/> province de l'Oubritenga et la région du Plateau-Central <br/>au Burkina Faso. <br/>La ville est également le chef-lieu de la province et de la région<br/>.</h1>
</div>
</section>
<section class="r">



<div class="grid-container">
      
      <?php $reponse=$bdd->query("SELECT * FROM site  where ide=2");
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



<!-- <div>
<img src="sorobango-mosque.jpg" alt="" class="p">
<P>Mosquee</P>
</div>
<div>
<img src="zi.jpg" alt="" class="p">
</div>
<div>
<img src="zi2.jpg" alt="" class="p">
<p>le parc de ziniare</p>
</div>
<div>
<img src="zi3.jpg" alt="" class="p">
<p>le parc de ziniare</p>
</div>


</section>
<section class="r" >
<div>
<img src="hip.jpg" alt="" class="p">
</div>
<div>
<img src="barrage.jpg" alt="" class="p">
</div>
<div>
<h1>BARRAGE DE ZIGA</h1>

<p>Le barrage est un ouvrage en terre avec noyau  en argile de 3 km<br/> de longueur en crête équipé  d'un déversoir poids en béton et d'une station<br/> de pompage.
D'une hauteur de 18 m au point le plus haut,  <br/>il a une largeur en pied de 50 m, pour une largeur de 5 m en crête. <br/> Le volume de la retenue normale, d'une profondeur maximum de 15 m<br/> est de 200 millions de m3. <br/>La retenue s'étend sur une superficie de l'ordre de 900 ha.</p> -->

</div>
</section>
<br/>
<?php include ("footer.php") ?>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>