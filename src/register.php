<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
 

    
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "<br> Please enter a username.";
    } 
    elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "<br> Username can only contain letters, numbers, and underscores.";
    }
    else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "<br> This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "<br> Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "<br> Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "<br> Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<br> Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<br> Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "<br> Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My-Links😄Login</title>
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
                <img src="logo.png" alt="logo" class="img">
                <h1 style="font-family:'Courier New'" >My-Links.Tech</h1>
                <h1 style="font-family:verdana">🔥All Links at One Spot🔥</h1>
            </div>
    <div class="wrapper2">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
             <label>Username-<br>
                <b>my-links.tech/</b></label>
                <input type="text" name="username" placeholder="be Unique here😉" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="will be encrypted🔐" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="you will have the 🔑" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="button" value="Submit">
                <input type="reset" class="button2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
    
<br><br>

<div class="footer">
    <p style="font-family:Verdana(sans-serif);color:white">💻Developed 🧑🏻‍💻by Ashutosh Soni😎</p>
    
    <a href="https://my-links.tech/AboutUs.html" style="color: grey">About Us👨‍🔧</a>
    <a href="https://my-links.tech/ContactUs.html" style="color: grey">Contact Us🤳</a>
    <a href="https://ashutosh7i.me/" style="color: grey">Admin🧑🏻‍💻</a>
    <br>
    <a href="https://my-links.tech/privacy.html" style="color: grey">📜Privacy Policy📜</a>
    <a href="https://my-links.tech/tos.html" style="color: grey">Terms Of Service📜</a>
        </div>
        </section>
</body>
</html>
