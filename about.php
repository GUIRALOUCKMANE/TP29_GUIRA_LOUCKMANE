<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="about.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>




<body>
<?php include ("connection.php") ?>
<?php include ("menu.php") ?>
<marquee behavior="" direction="right"><h1>GUIDE DE VOYAGE SAHEL</h1></marquee>
<section class="ll">
<div>
<!-- <img src="dori.jpg" alt="" class="a"> -->
<img src="arbre.jpg" alt="" class="a">
</div>

</section>
<br/>

<section class="r">











<div class="grid-container">
      
      <?php $reponse=$bdd->query("SELECT * FROM site  where ide=3");
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
<!-- <div class="ville">
<img src="sahel.jpg" alt="" class="b">

<h1>Dune du sahel</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur expedita magnam maxime.</p>
<button>visiter</button>
</div>

<div class="ville">
<img src="sahel1.jpg" alt="" class="b">
<h1>Dune du sahel</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur expedita magnam maxime.</p>
<button>visiter</button>
</div>

<div class="ville">
<img src="desert.jpg" alt="" class="b">
<h1>Dune du sahel</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur expedita magnam maxime.</p>
<button>visiter</button>
</div>

<div class="ville">
<img src="he.jpg" alt="" class="b">
<h1>dromadaire</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur expedita magnam maxime.</p>
<button>visiter</button>
</div>



</section>
<br/>
<section class="r">
<div class="ville">
<img src="heritage.jpg" alt="" class="b">
<h1>heritage art</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur expedita magnam maxime.</p>
<button>visiter</button>
</div>






<div class="ville">
<img src="mosqu.jpg" alt="" class="b">
<h1>mosquee</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur expedita magnam maxime.</p>
<button>visiter</button>
</div>



<div class="ville">
<img src="rouge.jpg" alt="" class="b">
<h1> Arba Diallo.</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur expedita magnam maxime.</p>
<button>visiter</button>
</div>
<div>
<marquee behavior="" direction="right"><h1>Hama Arba Diallo.</h1></marquee>
<h4>Hama Arba Diallo s’est éteint .</h4>

</div>

 -->

</section>
<br/>
<?php include ("footer.php") ?>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>  
</body>
</html>