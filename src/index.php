<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Links.Tech</title>
    <meta name="description" content="My-Links.Tech is a Free Website to create all Social Links at one Place Webpage.
    Use this Website to get you own Url containing all your links. - Ash-Technologies, Ashutosh7i ,Aashutosh Soni">
    <meta name="keywords" content="HTML, CSS, JavaScript, Ash-Technologies, Ashutosh7i, Aashutosh Soni">
    <meta name="author" content="Aashutosh Soni">
    <!--Style Elements-->
    <link rel="stylesheet" href="./stylesheet/style.css">

    <!--Includer Script-->
    <script>
        //Includer script.
        //This script allows us to efficiently import html elements as components in a webpage.
        //author- Aashutosh Soni
        function useIncluderScript() {
        var z, i, elmnt, file, xhttp;
        /* Loop through a collection of all HTML elements: */
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            /*search for elements with a certain atrribute:*/
            file = elmnt.getAttribute("use-IncluderScript");
            if (file) {
            /* Make an HTTP request using the attribute value as the file name: */
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                if (this.status == 200) { elmnt.innerHTML = this.responseText; }
                if (this.status == 404) { elmnt.innerHTML = "Page not found."; }
                /* Remove the attribute, and call this function once more: */
                elmnt.removeAttribute("use-IncluderScript");
                useIncluderScript();
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            /* Exit the function: */
            return;
            }
        }
        }
    </script>
    
</head>

<body>
    <!--Importing Navbar using "use-IncluderScript"&includerScript.js -->
    <div use-IncluderScript="./components/navbar.html"></div>
    <script>useIncluderScript();</script>
    
        <!-- Head-->
        <div class="head-div">
            <img src="logo.png" alt="logo" class="img">
            <h1 style="font-family:'Courier New'">My-Links.Tech</h1>
            <h1 style="font-family:verdana">🔥All Links at One Spot🔥</h1>
        </div>
        <div class="head-div2">
            <h3 style="font-family:Trebuchet MS" class="AboutText">My-Links.Tech&reg; is a Free Website to get all your
                Social Links at one Webpage.</h3>
            <h3 style="font-family:trebuchet MS" class="AboutText"> Use this Website to get you own Page containing all
                your links.</h3>
            <h2 style="font-family:trebuchet MS" class="AboutText"> 🤗Easy to customise
                <br /> 😎Fast Website
                <br /> 😇Just Ask.
            </h2>
            
                       <button onclick="window.location.href='https://ashutosh7i.me'">
                <h3>🤔Demo Page🤔<h /3>
            </button>
            <br><br><br>
            
            <!--now adding slider.html by including page method-->

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">❤</div>
        <img src="sliderfiles/startimg.png" style="width:100%">
        <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
        <div class="numbertext">👨‍💻</div>
        <img src="sliderfiles/ashutosh.png" style="width:100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">⚡</div>
        <img src="sliderfiles/aarav.png" style="width:100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">🌟</div>
        <img src="sliderfiles/aditya.png" style="width:100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">😂</div>
        <img src="sliderfiles/deependra.png" style="width:100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">🔥</div>
        <img src="sliderfiles/qadir.png" style="width:100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">🎉</div>
        <img src="sliderfiles/vidhan.png" style="width:100%">
        <div class="text"></div>
    </div>

</div>
<br>

<!---->
<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<br>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>

    <br>       
<!-- <div style="font-family:Trebuchet MS" class="AboutText"> <?php include "visitor_counter.php"; ?> </div>
        </div><br>
     -->   
        <div class="makemypage">


            <br>
            <button onclick="window.location.href='signup.php'">
                <h2>🤩Make My Page🤩<h /2>
            </button>


        </div>

        <div style="text-align:center;">
            <button id="myButton" class="hometologin">
                <h4>🤝Login Here🤝</h4>
            </button>
            <script type="text/javascript">
            document.getElementById("myButton").onclick = function() {
                location.href = "login.php";
            };
            </script>
        </div>

        <br>
        <br>



        <script src="/src/components/includerScript.js">useIncluderScript();console.log('test')</script>
</body>

<div class="footer">
    <p style="font-family:Verdana(sans-serif);color:white">💻Developed 🧑🏻‍💻by Ashutosh Soni😎</p>
    
    <a href="https://my-links.tech/AboutUs.html" style="color: grey">About Us👨‍🔧</a>
    <a href="https://my-links.tech/ContactUs.html" style="color: grey">Contact Us🤳</a>
    <a href="https://ashutosh7i.me/" style="color: grey">Admin🧑🏻‍💻</a>
    <br>
    <a href="https://my-links.tech/privacy.html" style="color: grey">📜Privacy Policy📜</a>
    <a href="https://my-links.tech/tos.html" style="color: grey">Terms Of Service📜</a>

</div>

</html>
