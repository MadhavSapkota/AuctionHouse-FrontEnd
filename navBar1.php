<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
    
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" />
    </head>
    <body>
        <nav>
            <div class="menu-icon">
                <span class="fas fa-bars"></span>
            </div>
            <div class="logo">
                AuctionHouse
            </div>
            <div class="nav-items">
                <li><a href="#section1" style="font-family: serif;">HOME</a></li>
                <li><a href="#" style="font-family: serif;"></a></li>

                <style>
                    .dropbtn {
                        color: white;
                        font-size: 16px;
                        border: none;
                    }

                    .dropdown {
                        position: relative;
                        display: inline-block;
                        padding-top: 9px;
                    }

                    .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f1f1f1;
                        min-width: 160px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        z-index: 1;
                    }

                    .dropdown-content a {
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                    }

                    .dropdown-content a:hover {
                        background-color: #ddd;
                    }

                    .dropdown:hover .dropdown-content {
                        display: block;
                    }
                </style>

                <style>
                    .dropbtn {
                        background-color: black;
                        color: white;
                        /*padding: 16px;*/
                        font-size: 16px;
                        border: none;
                        cursor: pointer;
                    }

                    .dropbtn:hover,
                    .dropbtn:focus {
                        background-color: black;
                    }

                    .dropdown {
                        position: relative;
                        display: inline-block;
                    }

                    .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f1f1f1;
                        min-width: 160px;
                        overflow: auto;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        z-index: 1;
                    }

                    .dropdown-content a {
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                    }

                    .dropdown a:hover {
                        background-color: #ddd;
                    }

                    .show {
                        display: block;
                    }
                </style>

               

                <div class="dropdown" style="margin-top: -6px;">
                    <button onclick="myFunction()" class="dropbtn">CATEGORY</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="index.php">Drawing</a>
                        <a href="index.php">Painting</a>
                        <a href="index.php">Photographic Image</a>
                        <a href="index.php">Sculpture</a>
                        <a href="index.php">Carvings</a>
                    </div>
                </div>

                <script>
                    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
                    function myFunction() {
                        document.getElementById("myDropdown").classList.toggle("show");
                    }

                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function (event) {
                        if (!event.target.matches(".dropbtn")) {
                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            var i;
                            for (i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains("show")) {
                                    openDropdown.classList.remove("show");
                                }
                            }
                        }
                    };
                </script>

                <li><a href="#section3" style="font-family: serif;">&nbsp;&nbsp;&nbsp;ABOUTUS</a></li>
                <li><a href="#section4" style="font-family: serif;">CONTACT</a></li>
                <!-- <li><a href="#">Feedback</a></li> -->
            </div>
            <div class="search-icon">
                <span class="fas fa-search"></span>
            </div>
            <div class="cancel-icon">
                <span class="fas fa-times"></span>
            </div>
            <form action="#">
                <input type="search" class="search-data" placeholder="Search" required />
                <button type="submit" class="fas fa-search"></button>
            </form>
        </nav>

        <script>
            const menuBtn = document.querySelector(".menu-icon span");
            const searchBtn = document.querySelector(".search-icon");
            const cancelBtn = document.querySelector(".cancel-icon");
            const items = document.querySelector(".nav-items");
            const form = document.querySelector("form");
            menuBtn.onclick = () => {
                items.classList.add("active");
                menuBtn.classList.add("hide");
                searchBtn.classList.add("hide");
                cancelBtn.classList.add("show");
            };
            cancelBtn.onclick = () => {
                items.classList.remove("active");
                menuBtn.classList.remove("hide");
                searchBtn.classList.remove("hide");
                cancelBtn.classList.remove("show");
                form.classList.remove("active");
                cancelBtn.style.color = "#ff3d00";
            };
            searchBtn.onclick = () => {
                form.classList.add("active");
                searchBtn.classList.add("hide");
                cancelBtn.classList.add("show");
            };
        </script>
    </body>
</html>
