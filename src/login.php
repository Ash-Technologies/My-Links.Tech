<!DOCTYPE html>
<html lang="en">
<?php require_once("config.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<script src='assets/bootstrap/js/bootstrap.min.js'></script> 
<link rel="stylesheet" href="style2.css">

    <title>My-Links.Tech -Ashutosh7i</title>
 <meta name="description" content="My-Links.Tech is a Free Website to create all Social Links at one Place Webpage.
Use this Website to get you own Url containing all your links. -Ashutosh7i ,Aashutosh Soni">
  <meta name="keywords" content="HTML, CSS, JavaScript, Ashutosh7i, Aashutosh Soni">
  <meta name="author" content="Aashutosh Soni">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-01VSLKX4SQ');
</script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="logincss.css">
</head>

<body>
    <section>
 
        <div class="box">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="login_form">
 	<form action="login_process.php" method="POST">
  <div class="form-group">
 <img src="assets/img/logo2.png" alt="Logo" class="logo img-fluid"> <br>
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

    <label class="label_txt">Username or Email </label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
  <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn">Login</button>
</form>
<p style="font-size: 12px;text-align: center;margin-top: 10px;"><a href="forgot-password.php" style="color: #00376b;">Forgot Password?</a> </p>
   <br> 
    <p>Not on my-links.tech?🙄 <a href="signup.php">Sign up!!</a> </p>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
</div> 
</div>


    </section>
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
