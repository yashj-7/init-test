<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColorPixel</title>
</head>

<body>
    <header>
        <div class=main>
            <div>
                <h1><span id=main1>C</span><span id=main2>o</span><span id=main3>l</span><span id=main4>o</span><span
                        id=main5>r</span><span id=main6>P</span><span id=main7>i</span><span id=main8>x</span><span
                        id=main9>e</span><span id=main10>l</span>
                        <a href="./index.php" class="fa fa-paint-brush" ></a>
                        <span class=shift1>           
                          <i class="fa fa-user">
                          </i> 
                          <span class="chota"><u>
                            <?php echo "Welcome ". $_SESSION['username']?>!</u>
                          </span>
                        </span>
                </h1>
                <h3>Every color matters</h3>
                
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="templates1_l.html">Templates</a></li>
                <li><a href="themes1_l.html">Themes</a></li>
                <li><a href="downloads_l.html">Downloads</a></li>
                <li><a href="https://localhost/login/login.php">Login</a></li>
                <li><a href="https://localhost/login/register.php">Register</a></li>
                <li><a href="https://localhost/login/logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <div>
        <h2>The super fast color schemes generator !</h2>
        <p class="intro">Create your perfect color or get inspired by thousands of beautiful color templates or themes.
        </p>
    </div>
    <div class="prg">
        <div>
            <img src="./image/Dark Cheddar.png" class="rectangle">

        </div>
        <div>
            <img src="./image/Crocus Petal.png" class="rectangle">
            <img src="./image/biking red.png" class="rectangle">
            <img src="./image/Aspen Gold.png" class="rectangle">
            <img src="./image/Almond Buff.png" class="rectangle">
            <img src="./image/Bluestone.png" class="rectangle">
            <img src="./image/Eclipse.png" class="rectangle">
            <img src="./image/Eden.png" class="rectangle">
            <img src="./image/Evening Blue.png" class="rectangle">
            <img src="./image/Fiesta.png" class="rectangle">
            <img src="./image/Fruit Dove.png" class="rectangle">
            <img src="./image/Galaxy Blue.png" class="rectangle">
            <img src="./image/Guacamole.png" class="rectangle">
            <img src="./image/Jester Red.png" class="rectangle">
            <img src="./image/Living Coral.png" class="rectangle">
            <img src="./image/Mango Mojito.png" class="rectangle">
            <img src="./image/Nebulas Blue.png" class="rectangle">
            <img src="./image/Orange Tiger.png" class="rectangle">
            <img src="./image/Paloma.png" class="rectangle">
            <img src="./image/Pepper Stem.png" class="rectangle">
            <img src="./image/Pink Peacock.png" class="rectangle">
            <img src="./image/Princess Blue.png" class="rectangle">
            <img src="./image/Quetzal Green.png" class="rectangle">
            <img src="./image/Red Pear.png" class="rectangle">
            <img src="./image/Rocky Road.png" class="rectangle">
            <img src="./image/Soybean.png" class="rectangle">
            <img src="./image/Sugar Almond.png" class="rectangle">
            <img src="./image/Sweet Lilac.png" class="rectangle">
            <img src="./image/Terrarium Moss.png" class="rectangle">
            <img src="./image/Toffee.png" class="rectangle">
            <img src="./image/Turmeric.png" class="rectangle">
            <img src="./image/Ultra Violet.png" class="rectangle">
            <img src="./image/Valiant Poppy.png" class="rectangle">
            <img src="./image/Vanilla Custard.png" class="rectangle">

        </div>

        <p class="detail">See the latest color trend and make something cool. </p>
        <button class="b2" onclick="visitPageTemp();">Explore Templates</button>
    </div>
    <div class="prg">
        <div><img src="./image/Screenshot (231).png" class="theme"></div>
        <div><img src="./image/Screenshot (233).png" class="theme">
            <img src="./image/Screenshot (236).png" class="theme">
            <img src="./image/Screenshot (251).png" class="theme">
            <img src="./image/Screenshot (252).png" class="theme">
            <img src="./image/Screenshot (253).png" class="theme">
            <img src="./image/Screenshot (254).png" class="theme">
            <img src="./image/Screenshot (255).png" class="theme">
            <img src="./image/Screenshot (256).png" class="theme">
            <img src="./image/Screenshot (257).png" class="theme">
            <img src="./image/Screenshot (258).png" class="theme">
            <img src="./image/Screenshot (259).png" class="theme">
            <img src="./image/Screenshot (260).png" class="theme">
            <img src="./image/Screenshot (261).png" class="theme">
        </div>
        <p class="detail1">Synchronize all your webpages to build the best.</p>
        <button class="b3" onclick="visitPageTheme();">Explore Themes</button>
    </div>

    <div class="prg">
        <img src="./image/icon.png" class="icon">
        <p class="detail2">Make your perfect color by our software</p><button class="b1"
            onclick="location.href='https://drive.google.com/file/d/1Eotr_YwBKwNe3AMZVSniflTQdDdAXoBs/view?usp=sharing'">Download
            Now<i class="fa fa-download"></i></button>
    </div>
    <div>
        <div class="line">
            <p></p>
        </div>
    </div>
    <footer class="bg">
        <div class="grid-container">
            <div class="item1">
                <a href="./about.html"style="color: black;">About</a><br>
                <a href="./index.html" style="color: black;">Home</a><br>
                <a href="./templates1.html" style="color: black;">Templates</a><br>
                <a href="./themes1.html"style="color: black;"> Themes</a><br>
                 <a href="./downloads.html"style="color: black;">Downloads</a><br>
                 <a href="./login.php"style="color: black;">Login</a><br>
            <a href="./register.php"style="color: black;">Register</a><br></div>
            <div class="item2">For further queries and feedback:<br>
                 <i class="fa fa-envelope"></i> <a href = "mailto:colorpixel2911@gmail.com" class="colp">&nbsp&nbspSend Email</a><br>
                 <i class="fa fa-phone"></i>&nbsp&nbspCall Us<br></div>
          </div>
        </div>
        <div class="bg1"> <p class="gap"> &copy; ColorPixel 2020</p></div>
       <div class="bg2"> <i class="fa fa-facebook "></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i></div>
    </footer>
</body>
<script>
    var a = 0;
    var b = 0;
    slide();
    image();

    function slide() {
        var i;
        var x = document.getElementsByClassName("rectangle");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        a++;
        if (a > x.length) { a = 1 }
        x[a - 1].style.display = "block";
        setTimeout(slide, 1000);
    }

    function image() {
        var j;
        var y = document.getElementsByClassName("theme");
        for (j = 0; j < y.length; j++) {
            y[j].style.display = "none";
        }
        b++;
        if (b > y.length) { b = 1 }
        y[b - 1].style.display = "block";
        setTimeout(image, 1000);
    }
    function visitPageTemp()
    {window.location = "templates1.html";}
    function visitPageTheme()
    {window.location = "themes1.html";}

</script>


</html>