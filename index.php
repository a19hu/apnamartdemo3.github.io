<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APNAmart</title>
    <link rel="stylesheet" href="index.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
  
</head>
<body>
    <div class="fixt">
        <header class="head">
            <div class="logo"><a href="index.html"><img src="logo (1).png" alt=""></a></div>
            <div class="flag"><img src="flag.webp" alt=""></div>    
            <div class="searchbar">
                 <input type="text" name="" placeholder=" Type to Search...">
                 <img src="search.png" alt="" srcset=""></div>
            <div class="sign"><a href="logout.php">Logout</a></div>
            <div class="cart" > <a href=""><img src="shop.png" alt="" srcset="">(<span id="count">0</span>) </a></div> 
        </header>
        <ul class="nav">
            <li class="home"><a href="aboutus.html">About Us</a></li>
            <li class="home"><a href="kitchen.html">Kitchen</a></li>
            <li class="home" id="shop" ><a href="shopnow.html">Shop Now</a></li>
            <li class="home"><a href="home.html">Home  </a></li>
            <li class="home"><a href="fashion.html">Fashion</a></li>
            <li class="home"><a href="food.html">Food</a></li>
            <li class="home"><a href="medicine.html">Medicine</a></li>
        </ul>
        <details class="hidden">
            <summary class="summary"></summary>
            <ul class="nav1">
             <li class="home1"><a href="aboutus.html">About Us</a></li>
             <li class="home1"><a href="kitchen.html">Kitchen</a></li>
             <li class="shop" ><a href="shopnow.html">Shop Now</a></li>
             <li class="home1"><a href="home.html">Home</a></li>
             <li class="home1"><a href="fashion.html">Fashion</a></li>
             <li class="home1"><a href="food.html">Food</a></li>
             <li class="home1"><a href="medicine.html">Medicine</a></li>
            </ul>
        </details>
    </div>    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="a1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="a4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="a2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>        
    <div class="look">
      <h1> Creazy Deals</h1>
        <div class="lookitems"><img src="babyshop.jpg" alt=""></div>
        <div class="lookitems"><img src="royaltooth.png" alt=""></div>
        <div class="lookitems"><img src="soap1.jpg" alt=""></div>
        <div class="lookitems"><img src="soap2.jpg" alt=""></div>
        <div class="lookitems"><img src="soap3.jpg" alt=""></div>
        <div class="lookitems"><img src="cream1.jpg" alt=""></div>
        <div class="lookitems"><img src="kitchen1.webp" alt=""></div>
        <div class="lookitems"><img src="kitchen2.jpg" alt=""></div>
        <div class="lookitems"><img src="kitchen4.jpg" alt=""></div>
        <div class="lookitems"><img src="kitchen5.webp" alt=""></div>
    </div>
    <div class="look1">
        <h1>SHOP By Category</h1>
       <a href=""><div class="lookitem"><img src="home1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home2.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home3.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home4.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen6.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen7.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="cream2.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home2.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home3.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home4.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen6.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen7.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="cream2.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/so.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/so1.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/so2.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz1.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz2.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz3.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="cream2.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home2.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home3.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="home4.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen6.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen7.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/wa1.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/wa2.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/wa3.png" alt=""></div></a>
    </div>
    <div class="more">
       <a href="index.html"><button >1</button></a> 
       <a href=""><button>2</button></a> 
       <a href=""><button>more..</button></a>
    </div>
    <div class="last">

    <div class="lastleft">
        <h1>contact us</h1>
        <div class="icon">
         <a href="https://www.instagram.com/im_ashutosh15/"><img src="instgram.png" alt=""></i></a>
         <a href="https://www.linkedin.com/feed/"><img src="facebook.png" alt=""></i></a> 
         <a href="https://www.linkedin.com/in/ashutosh-kumar-5aa3b3259/" ><img src="linkedin.png" alt=""></i></a> 
        </div> 
    </div>
    <div class="lastright">
        <details>
            <summary> welocome to APNAmart</summary>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus distinctio nisi necessitatibus dicta ipsa, obcaecati similique quia aspernatur molestias, ut nulla eius autem excepturi, fugiat quas in fugit esse!</p>
        </details>
    </div> 
    </div>   
  <script src="index.js"></script>
</body>
</html>
