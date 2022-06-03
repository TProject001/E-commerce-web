<?php

//to remove warning from web-page
error_reporting(0);

$conn = mysqli_connect("localhost:3308", "root", "", "ecommerce") or die("connection failed");
if ($conn) {
} else {
    echo "error occur";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Roboto&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="script.js"></script>
    <script>
        function addToCart2(dt){
            <?php
            $usrname = "<script>return dt</script>";
            global $usrname;
            ?>
           
        }
        function addToCart(){
            var prdn = document.getElementById("name").value;
            var prdp = document.getElementById("price").value;
            <?php 
          //  $pn = $_POST['name'];
        //    $pp = $_POST['price'];
          //  $pp ="<script>return document.getElementById('price').value;</script>";
            $pn="<script>document.writeln(prdn)</script>";
            $pp="<script>document.writeln(prdp)</script>";
            $query = "INSERT INTO products VALUES('','$pn','$pp')";
            $putdata = mysqli_query($conn, $query);
            
            if ($putdata) {
            } else {
              echo "Failed to insert Data into database";
            }
            
           //     $pn ="<script>return document.getElementById('name').value;</script>";
            //    $pp ="<script>return document.getElementById('price').value;</script>";
            //    $query = "INSERT INTO products VALUES('$usrname','$pn','$pp')";
            //    $putdata = mysqli_query($conn, $query);
            ?>
        }
        
    </script>
</head>

<body>
    <header>
        <nav class="nav1">
            <div class="left">
                <span>Welcome to My E-shop</span>
                <a href="Register form.php">Register</a> OR
                <a href="Login form.php">Login</a>
            </div>

            <div class="right">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-whatsapp"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-pinterest"></i>
            </div>

        </nav>
        <!--nav1 end-->
        <!--nav2 start-->
        <nav class="nav2">
            <div class="nav2-left">
                <i class="fa fa-phone"></i> +91 382946790..
                <i class="fa fa-envelope"></i> nd12345@gmail.com
            </div>
            <div class="nav2-center">
                <h1>Fashion <span>Bazaar</span></h1>
                <p>Everything for kids world</p>
            </div>
            <div class="nav2-right">
                <i class="fa fa-map"></i> Contact us
             <!--   <i class='fas fa-cart-arrow-down'></i> Orders -->
            </div>
        </nav>
        <!--nav2 end-->
        <!--nav3 start-->
        <nav class="nav3">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fa fa-user"></i>Boy</a></li>
                <li><a href="#"><i class="fa fa-users"></i>Accessories</a></li>
                <li><a href="#"><i class="fa fa-anchor"></i>Toys <i class="fa fa-caret-down"></i></a>
                    <ul>
                        <li><a href="#"><i class="fa fa-clipboard"></i>Wooden</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Plastic</a></li>
                        <li><a href="#"><i class="fa fa-gavel"></i>Iron</a></li>

                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-calendar-check-o"></i>Special</a></li>
                <li><a href="#"><i class="fa fa-search"></i>Find</a></li>
            </ul>
        </nav>
        <!--nav3 end-->


        <!--featured start-->
        <section class="featured">
            <div class="featured-text">
                <button>Coming soon</button>
                <h2>Our new designs</h2>
            </div>
        </section>
        <!--featured end-->

 


    <footer>

        <div>
            <h1> Fashion <span>Bazzar</span></h1><br>
            <P>Everything for kids world</P>
        </div>

        <div>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-whatsapp"></i>
            <i class="fa fa-pinterest"></i>
            <p><br> Design by Deepti Shitole</p>
        </div>

        <div>
            <p>
                @2021 Copyright All Rights Reserved
            </p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 1200,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

</body>

</html>