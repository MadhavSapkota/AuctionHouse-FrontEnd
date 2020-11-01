<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>


  <?php require "navBar1.php"?>

<!-- <nav class="navbar navbar-inverse" id="myTopnav">
  <div class="container-fluid">
  
       <img src="designImage/travel1.jpg" alt="Logo"  style="width:30px; height: 60px;">
    



    <span><b><h4 style="margin-right:200px; color: white;font-family: 'Tangerine', serif;
        font-size: 48px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAuction House</h4></b></span>


    <ul class="nav navbar-nav" style="display: inline; font-family: serif;">
      <li class="nav-link"><a href="#section1"><b>HOME</b></a></li>
       


         <div class="dropdown">
             <li class="nav-link"><a class="dropbtn" style="color: white;"></li><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCATEGORY</b><i class="fa fa-caret-down"></i></a>

                      <div class="dropdown-content" style="font-family: sans-serif;">
                        <a href="template/web/drawing.php">Drawing</a>
                        <a href="template/web/painting.php">Painting</a>
                        <a href="template/web/PhotographicImage.php">Photographic Image</a>
                        <a href="template/web/sculpture.php">Sculpture</a>
                        <a href="template/web/carving.php">Carvings</a>
                      </div>

                     </div>



             <style>
                            .dropbtn {
                              color: white;
                             
                            }

                            .dropdown {
                              position: relative;
                              display: inline-block;
                              padding-top: 10px;
                            }

                            .dropdown-content {
                              display: none;
                              position: absolute;
                              background-color: #f1f1f1;
                              min-width: 160px;
                              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                              z-index: 1;
                            }

                            .dropdown-content a {
                              color: black;
                              padding: 12px 16px;
                              text-decoration: none;
                              display: block;
                            }

                            .dropdown-content a:hover {background-color: #ddd;}

                            .dropdown:hover .dropdown-content {display: block;}


                            @media screen and (max-width: 600px) {
                            .navbar navbar-inverse a:not(:first-child), .dropdown .dropbtn {
                              display: none;
                            }
                            .navbar navbar-inverse a.icon {
                              float: right;
                              display: block;
                            }
                          }


                          @media screen and (max-width: 600px) {
                        .navbar navbar-inverse.responsive {position: relative;}
                        .navbar navbar-inverse.responsive .icon {
                          position: absolute;
                          right: 0;
                          top: 0;
                        }

                        .navbar navbar-inverse.responsive a {
                        float: none;
                        display: block;
                        text-align: left;
                      }

                      .navbar navbar-inverse.responsive .dropdown {float: none;}
                      .navbar navbar-inverse.responsive .dropdown-content {position: relative;}
                      .navbar navbar-inverse.responsive .dropdown .dropbtn {
                        display: block;
                        width: 100%;
                        text-align: left;
                      }
                    }





                            
                       </style>





      <li class="nav-link"><a href="#section3"><b>ABOUT US</b></a></li>
      <li class="nav-link"><a href="#section4"><b>CONTACT</b></a></li>
    </ul>









                          <div class="search-icon">
<span class="fas fa-search"></span></div>
<div class="cancel-icon">
<span class="fas fa-times"></span></div>
<form action="#">
        <input type="search" class="search-data" placeholder="Search" required>
        <button type="submit" class="fas fa-search"></button>
      </form> -->









<!-- <div class='container'>
  <div class='content-wrapper' style="background-color: blue;">
    <div class='row' style="background-color: red;">
     
      <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>

        <form class='navbar-form'>
          <div class='input-group'>
            <input class='form-control' type='text' name='search' placeholder='Location' />
            <span class="input-group-btn">
              <button type='submit' class='btn btn-default'>
                <span class='glyphicon glyphicon-search'></span>
              </button>
            </span>

          </div>
        </form>

      </div>
    </div>
  </div>

</div>
 -->















          <!-- NAVIGATION HOME ICON -->
          <a href="javascript:void(0);" style="font-size:15px;margin-left: 20px;" class="icon" onclick="myFunction()">&#9776;</a>



  </div>


</nav>

<!-- JS File for the navigation Home icon -->


 <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>



<!-- <div class="container">
  <h3>Navbar Forms</h3>
  <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
</div> -->

</body>
</html>
