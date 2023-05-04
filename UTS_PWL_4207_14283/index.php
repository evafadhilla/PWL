<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="icon" href="image/iconweb.png">
        <title>Home</title>
    </head>
    <head>
        <header>
            <a href="index.php" class="logo">Ostyle Shop</a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="http://localhost/UTS_PWL_4207_14283/index.php" class="active">Home</a></li>
                    <li><a href="http://localhost/UTS_PWL_4207_14283/product.php" class="">Product</a></li>
                    <li><a href="http://localhost/UTS_PWL_4207_14283/about.php" class="">About Us</a></li>
                    <li> <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" >Logout</a>
                    <li><a href="http://localhost/UTS_PWL_4207_14283/cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".menu-toggle").click(function(){
                    $(".menu-toggle").toggleClass("active")
                    $("nav").toggleClass("active")
                })
            })
        </script>
    </head>
    <body>
        <section class="banner">
            <h2><a href="http://localhost/UTS_PWL_4207_14283/login.php">START SHOPPING</a></h2>
        </section>
    </body>
    <footer>
        <div class="footertop">
            <div class="medsos">
                <ul>
                    <li><a href="https://www.instagram.com/evaafadila"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC0lOoZ3AE_3Vkqt8gGBYBpQ"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.tiktok.com/@evaafadila?_t=8YSy4nhoRAf&_r=1"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footerbottom">
            <div class="copyright">
                <h4 style="margin-top: 0px;"><br> &copy 2022 Ostyle Shop by Eva </br></h4>
            </div>
        </div>
    </footer>
</html>