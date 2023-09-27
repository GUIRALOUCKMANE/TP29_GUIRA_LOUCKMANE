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


<body>
   <section>
   
   <!-- <h1 class="site">BIENVENUE SUR MON SITE TOURISTIQUE</h1> -->




   <?php include ("connection.php") ?>
   <?php include ("menu.php") ?>
   <?php
@$nom=$_POST["nom"]; 
@$prenom=$_POST["prenom"];
@$age=$_POST["age"];
@$submit=$_POST["submit"];
$erreur="";
if(isset($submit))
if(empty($nom)) $erreur= "<li style='color:white' >Nom laissé vide!</li>";
if(isset($submit))
if(empty($prenom))$erreur.="<li style='color:white'>prenom laissé vide!</li>";
if(isset($submit))
if(!is_numeric($age) or $age<12)$erreur.="<li style='color:white'>age invalide!</li>";


else if (isset($submit)){
    echo "$nom";
    echo "$prenom";
    echo "$age";
}
?>

<h1 class="site">BIENVENUE SUR MON SITE TOURISTIQUE</h1>  

<header>INCRIPTION</header>
<section>
<form nom="fo" method="post" action="">
<div class="label">NOM</div>
<div class="input">
<input type="text" name="nom" value="<?php echo $nom?>" />
</div>
<div class="label">PRENOM</div>
<div class="input">
<input type="text" name="prenom" value="<?php echo $prenom?>"/>

</div>
<div class="label">AGE</div>
<div class="input">
<input type="number"min="12" name="age"value="<?php echo $age?>" />
</div>
<div class="input">
<input type="submit" name="submit" value="M'incrire" />

</div>



</form>

<?php if(!empty($erreur))  {  ?>                 
<div id="erreur"><?php echo $erreur ?></div>
<?php } ?>

   
      

      

   <!-- <?php include ("footer.php") ?> -->
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"></script>
</body>

</html>
   
      




      



      
         
   
   
   
   
   
   
   
   
   
   
   
   
   