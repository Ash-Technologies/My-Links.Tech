<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <!DOCTYPE html>
    <html lang="en">
    <head>
        
            <style>
    {
        box-sizing: border-box;
    }
    /* Set additional styling options for the columns */
    .column {
    float: left;
    }

    /* Set width length for the left, right and middle columns */
    .left {
    width: 33.33%;
    }

    .middle {
    width: 33.33%;
    }
    
    .right {
    width: 33.33%;
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    </style>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My-Links😄 Profile</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="navbar.css">
        <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
    </head>
<body style="background-color:#2c3333;"></body>

<body>

<section>
    
    <nav class="navbar">
 <!-- LOGO  -->
 <div class="logo">My-Links.Tech</div>
 <!-- NAVIGATION MENU -->
 <ul class="nav-links">
 <!-- USING CHECKBOX HACK -->
 <input type="checkbox" id="checkbox_toggle" />
 <label for="checkbox_toggle" class="hamburger">&#9776;</label>
 <!-- NAVIGATION MENUS -->
 <div class="menu">
 <li><a href="index.php">Home</a></li>
 <li><a href="login.php">Login</a></li>
 <li class="services">
 <a>Quick-Links</a>
 <!-- DROPDOWN MENU -->
 <ul class="dropdown">
 <li><a href="register.php">Register </a></li>
 <li><a href="login.php">Login</a></li>
 <li><a href="profile.php">Profile</a></li>
 <li><a href="reset-password.php">Reset Password</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>
 </li>
 <li><a href="ContactUs.html">Contact Us</a></li>
 <li><a href="logout.php">Logout</a></li>
 </div>
 </ul>
 </nav>
 
            <!-- Head-->
            <div class="head-div"> 
                <!--<img src="logo.png" alt="logo" class="imgmini">-->
                <h2 style="font-family:'Courier New'" >My-Links.Tech</h2>
              <!--  <h3 style="font-family:verdana">🔥All Links at One Spot🔥</h3>-->
            <h1 style="font-family:verdana">😎Profile🛠</h1>
            
    <h1 class="my-5">Hi👋 <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, Welcome to our site🥳.</h1>
    <p>
        <a href="reset-password.php" class="tplinks"style="color: white">🛠Reset Your Password🛠</a>
        <br>
        <a href="logout.php" class="tplinks"style="color: white">💣 LogOut 💣</a>
        
        </div>
        
</section>
      <div class="upload">  
        <form style="margin: auto; width: 220px;text-align: center; "action="userimageupload.php" method="post" enctype="multipart/form-data">
 <h2> Step 1, Upload an image</h2>            
 <h4> Upload or Update Image:</h4>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>
</p>
</div>
<div class="head-div"> 
         <h2>Add Website Name and Links</h2>    </div>
         <div class="wrappersimp">
        <form method="post" action="">
            
            <h3 class="">Name-</h3>
    <input type="text" placeholder="display-name" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>" />   <br><br>
    
<h3 class="">Image Shape-<br></h3>
<input type="radio" name="radio1" <?php if($_POST['radio1']=="circular") $imgshape="user";else $imgshape="img"?> value="circular" class="radio10" /> Circular<br>
<label class="">else the default image shape will be used.<br></label>


<h2 class="">Background-<br></h2>
<h4 class="">Hover to Preview😉</h4>
<div class="row">
        <div class="column left" style="background-color:#FFB695;">
            <h2>Gradient-</h2>
            <p>

<div class="myDIV">
    <input type="radio" name="radio2" value="Blue&Pink Gradient"/>
<label class"">Blue&Pink</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/gradient/Blue&Pink.jpeg"
            alt="Blue&Pink" /></div>
            
<div class="myDIV">
<input type="radio" name="radio2" value="Green&Yellow Gradient"/>
<label class"">Green&Yellow</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/gradient/Green&Yellow.jpeg"
            alt="Green&Yellow" /></div>
            
<div class="myDIV">            
<input type="radio" name="radio2" value="Purple&Blue Gradient"/>
<label class"">Purple&Blue</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/gradient/Purple&Blue.jpeg"
            alt="Purple&Blue" /></div>
            
<div class="myDIV">            
<input type="radio" name="radio2" value="Yellow&Pink Gradient"/>
<label class"">Yellow&Pink</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/gradient/Yellow&Pink.jpeg"
            alt="Yellow&Pink" /></div>
            
                </p>
        </div>
        
        <div class="column middle" style="background-color:#96D1CD;">
            <h2>Solid-</h2>
            <p>
                
                
<div class="myDIV">
    <input type="radio" name="radio2" value="Yellow-ish Solid"/>
<label class"">Yellow-ish</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/Solid/Yellow-ish.jpeg"
            alt="Yellow-ish Solid" /></div>
            
<div class="myDIV">
<input type="radio" name="radio2" value="Pink-ish Solid"/>
<label class"">Pink-ish</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/Solid/Pink-ish.jpeg"
            alt="Pink-ish Solid" /></div>
            
<div class="myDIV">            
<input type="radio" name="radio2" value="Classic Solid"/>
<label class"">Classic</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/Solid/Classic.jpeg"
            alt="Classic Solid" /></div>
            
<div class="myDIV">            
<input type="radio" name="radio2" value="Profession Solid"/>
<label class"">Profession</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/Solid/Profession.jpeg"
            alt="Profession Solid" /></div>
            </p>
        </div>
        
        
        <div class="column right" style="background-color:#74C3E1;">
            <h4>Texture <br>dont use, under development</h4>
            <p>
                
                
<div class="myDIV">
    <input type="radio" name="radio2" value="Green&Yellow Gradient"/>
<label class"">Green&Yellow</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/gradient/Green&Yellow.jpeg"
            alt="Blue&Pink" /></div>
            
<div class="myDIV">
<input type="radio" name="radio2" value="Green&Yellow Gradient"/>
<label class"">Green&Yellow</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/gradient/Green&Yellow.jpeg"
            alt="Green&Yellow" /></div>
            
<div class="myDIV">            
<input type="radio" name="radio2" value="Purple&Blue Gradient"/>
<label class"">Purple&Blue</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/gradient/Purple&Blue.jpeg"
            alt="Purple&Blue" /></div>
            
<div class="myDIV">            
<input type="radio" name="radio2" value="Yellow&Pink Gradient"/>
<label class"">Yellow&Pink</label><br> </div>
<div class="hide">
    <img id="image" src="/templates/demo/gradient/Yellow&Pink.jpeg"
            alt="Yellow&Pink" /></div>
            </p>
        </div>
    </div>




<label class="">else the default Background will be used.<br></label>


<?php
if($_POST['radio2']=="Blue&Pink Gradient") $bgcolor="stylegradientBluetoPink.css";
else if($_POST['radio2']=="Green&Yellow Gradient") $bgcolor="stylegradientGreentoYellow.css";
else if($_POST['radio2']=="Purple&Blue Gradient") $bgcolor="stylegradientPurpletoBlue.css";
else if($_POST['radio2']=="Yellow&Pink Gradient") $bgcolor="stylegradientYellowtoPink.css";
else if($_POST['radio2']=="Yellow-ish Solid") $bgcolor="stylesolidyellow-ish.css";
else if($_POST['radio2']=="Pink-ish Solid") $bgcolor="stylesolidpink-ish.css";
else if($_POST['radio2']=="Classic Solid") $bgcolor="stylesolidclassic.css";
else if($_POST['radio2']=="Profession Solid") $bgcolor="stylesolidprofession.css";

else $bgcolor="stylepublic.css"
?>



        <br><br>

    
    <label class="">1.Site-Name</label>
    <input type="text" placeholder="eg- Instagram" name="site1" value="<?= isset($_POST['site1']) ? htmlspecialchars($_POST['site1']) : '' ?>" />   <br>
    <label class="">Link-</label>
    <input type="text" placeholder="https://link.com" name="link1" value="<?= isset($_POST['link1']) ? htmlspecialchars($_POST['link1']) : '' ?>" />  <br>
    
    <label class="">2.Site-Name</label>
    <input type="text" placeholder="eg- Snapchat" name="site2" value="<?= isset($_POST['site2']) ? htmlspecialchars($_POST['site2']) : '' ?>" />   <br>
    <label class="">Link-</label>
    <input type="text" placeholder="https://link.com" name="link2" value="<?= isset($_POST['link2']) ? htmlspecialchars($_POST['link2']) : '' ?>" /> <br>
    
    
    <label class="">3.Site-Name</label>
    <input type="text" placeholder="eg- Linkedin" name="site3" value="<?= isset($_POST['site3']) ? htmlspecialchars($_POST['site3']) : '' ?>" />   <br>
    <label class="">Link-</label>
    <input type="text" placeholder="https://link.com" name="link3" value="<?= isset($_POST['link3']) ? htmlspecialchars($_POST['link3']) : '' ?>" />   <br>
    
    <label class="">4.Site-Name</label>
    <input type="text" placeholder="eg- Twitter/etc" name="site4" value="<?= isset($_POST['site4']) ? htmlspecialchars($_POST['site4']) : '' ?>" />   <br>
    <label class="">Link-</label>
    <input type="text" placeholder="https://link.com" name="link4" value="<?= isset($_POST['link4']) ? htmlspecialchars($_POST['link4']) : '' ?>" /> <br>
    
    <input type="submit" name="submit" />
  </form>

<?php
error_reporting(0);
//taking form input as varibles-
$name = ($_POST['name']);
$site1 = ($_POST['site1']);
$link1 = ($_POST['link1']);
$site2 = ($_POST['site2']);
$link2 = ($_POST['link2']);
$site3 = ($_POST['site3']);
$link3 = ($_POST['link3']);
$site4 = ($_POST['site4']);
$link4 = ($_POST['link4']);
$uname = ($_SESSION["username"]);

$submit = ($_POST['submit']);


//replace these texts in template file
$pattern = ['/#uname/','/#name/','/#imgshape/','/#bgcolor/','/#site1/','/#link1/','/#site2/','/#link2/','/#site3/','/#link3/','/#site4/','/#link4/']; 
//these inputs form form will be replaced
$replacement = [($uname),($name),($imgshape),($bgcolor),($site1),($link1),($site2),($link2),($site3),($link3),($site4),($link4)];
//source file
$userkanaam = htmlspecialchars($_SESSION["username"]);
$template = "templates/template1.txt";

//test code for amp-on 19-08-2022 06:47pm
//comment out $template = "templates/template1.txt"; first, then use this to create amp pages
//$template = "templates/templateamp.txt";

//$output = "docdir/";
//$output = "docdir.txt";
$getting_templates_contents = file_get_contents($template);
//$outputFile = ("simp.txt");

$outfile = ($userkanaam.'.html');



//$newfilename = $userkanaam . '.txt' . end($temp);

//$target_file = $output . $newfilename;
//temp 
//$target_file = $output;

echo ("<br>");
//echo("Original file contents : " . "<br><br>");
//var_dump($getting_templates_contents);
//echo("<br><br><br>");



//$somecontent = "no add this\n";
//$createFile = fopen($target_file,'w+')  or die("there is a problem");
//fwrite($createFile,$somecontent);
//fclose($createfile);

if ($submit == true) {
  //echo($template . " Processing" . "<br>");

//$somecontent = "no add this\n";
  $replace_data_in_file = preg_replace($pattern, $replacement, $getting_templates_contents);

//code to make file with username in specified directory
//$fp = fopen('users/user_txt/'.$username.'.txt', 'a+'); 
//$fwrite = $fwrite($fp, "," . $log_write);

//$_SERVER['DOCUMENT_ROOT'] . "/myText.txt","wb");  to store on root
  //create new file
  $createFile = fopen($outfile, 'w+')  or die("there is a problem");
  $writing_replaced_data = fwrite($createFile,$replace_data_in_file);



 // echo("New file contents : " . "<br><br>");
  //var_dump($replace_data_in_file);
  //echo("<br><br>");

  if ($writing_replaced_data == true) {
    echo("Page creation successful<br>");
    echo("Page hosted at- <br>");
    //echo($sitename);
    echo "<a href='$outfile'>my-links.tech/$userkanaam</a>";
  }
  else {
    exit("An error occured, please contact admin");
  }
}
else {
  exit("");
}
//close the file
fclose($createfile);



?>
</div>
         

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
