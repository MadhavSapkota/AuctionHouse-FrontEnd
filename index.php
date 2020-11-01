<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Auction Agency</title>
      <link rel="icon" href="travel.jpg">
      <head>
         <title>Auction Agency</title>
         <link rel="icon" href="travel.jpg">
         <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="./css/style.css">
            <link rel="stylesheet" type="text/css" href="css/style3.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <!-- For the Search -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
            <link href="dist/jquery.bsPhotoGallery-min.css" rel="stylesheet">
            <script src="dist/jquery.bsPhotoGallery-min.js"></script>   
            </script>
            <script>
               $(document).ready(function(){
                 $('ul.first').bsPhotoGallery({
                   "classes" : "col-xl-3 col-lg-2 col-md-4 col-sm-4",
                   "hasModal" : true,
                   "shortText" : false  
                 });
               });
               
               
            </script>
   </head>
   <!--........................... BODY PARTS INCLUDING........................................................... -->
   <body data-spy="scroll" data-target=".navbar" data-offset="" style="font-family: serif;font-size: 16px;">
      <!-- INTITATION OF THE NAVIGATION BAR -->
      <?php require "navbar.php"  ?>
      
      </head>
      <body>
         <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: -50px;">
            <ul class="carousel-indicators">
               <li data-target="#demo" data-slide-to="0" class="active"></li>
               <li data-target="#demo" data-slide-to="1"></li>
               <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <!--  <img src="mountain1.jpg" alt="Los Angeles" width="1100" height="500"> -->
                  <img class="img-responsive" src="./designImage/mountain1.jpg" alt="Chania" width="1100" height="500"> 
                  <div class="carousel-caption">
                     <h3>MidWestern Travels(P)Ltd.</h3>
                     <p>We are providing services for the inboard and outboard tourism services and provides guide. </p>
                  </div>
               </div>
               <div class="carousel-item">
                  <!-- <img src="mountain2.jpg" alt="Chicago" width="1100" height="500"> -->
                  <img class="img-responsive" src="./designImage/mountain2.jpg" alt="Chania" width="1100" height="500"> 
                  <div class="carousel-caption">
                     <h3>MidWestern Travels(P)Ltd.</h3>
                     <p >We are providing services for the inboard and outboard tourism services and provides guide. </p>
                  </div>
               </div>
               <div class="carousel-item">
                  <!-- <img src="mountain6.jpg" alt="New York" width="1100" height="500"> -->
                  <img class="img-responsive" src="./designImage/mountain6.jpg" alt="Chania" width="1100" height="500"> 
                  <div class="carousel-caption">
                     <h3>MidWestern Travels(P)Ltd.</h3>
                     <p>We are providing services for the inboard and outboard tourism services and provides guide. </p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
         </div>
         <style>
            body {
            position: relative; 
            }
         </style>
         <div id="section1">
            <div class="container">
               <body data-spy="scroll" data-target=".navbar" data-offset="1">
                  </nav>
                  <?php include 'template/web/seller.php'; ?>
                  <main id="main" class="site-main" role="main">
                  </ul>
                  </image>
            </div>
         </div>
         <br>
         <div id="section4"  style="padding-top:70px;padding-bottom:70px;margin-bottom: 80px;" >
         <?php require "contact.php"?>
         </div>
         <div id="section3">
          
         <?php include "aboutUs.php"?>
       
         </div>
</html>