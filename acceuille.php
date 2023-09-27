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
   <?php include ("connection.php") ?>
   <?php include ("menu.php") ?>
   <header>
  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }
  </style>

 

  <!-- Background image -->
  <div id="intro-example" class="p-5 text-center bg-image">
    
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3"><burkina-faso</h1>
          <h5 class="mb-4">
            Best & free guide of responsive web design
          </h5>
          <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A"
            role="button" rel="nofollow" target="_blank">Start tutorial</a>
          <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"
            target="_blank" role="button">Download MDB UI KIT</a>
        </div>
      </div>
    </div>
  </div>
  <marquee behavior="" direction="" class="jjn">Welcome to BURKINA-FASO land of welcome and tradition</marquee>
  <!-- Background image -->
</header>
<section class="kkk">
<div>
<img src="cascade.jpg" alt="" class="lm">
<p>BANFORA</p>
</div><div>
<img src="zi.jpg" alt="" class="lm">
<P>ZINIARE</P>
</div>
<div>
<img src="sahel.jpg" alt="" class="lm">
<P>SAHEL</P>
</div>

</section>

<section class="kkk">
<div>
<img src="siteban.jpg" alt="" class="lm">
<p class="vi">BIENVENUE A BANFORA</p>
<button class="btm"><a href="index.php">joindre</a></button>
</div>
<div>
<img src="bienvenue.jpg" alt="" class="lm">
<p class="vi">BIENVENUE A ZINIARE</p>
<button class="btm"> <a href="service.php">joindre</a></button>
</div>
<div>
<img src="diver.jpg" alt="" class="lm">
<p class="vi">BIENVENUE AU SAHEL</p>
<button class="btm"> <a href="about.php">joindre</a></button>
</div>
</section>
  <br/><br/>  <br/>  
   <?php include ("footer.php") ?>
   
   </section>
   
   <br/> <br/> <br/>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"></script>
</body>

</html>