<?php
session_start();
include '../auth.php';
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
<head>
<body>
    <nav>
    <a href="Website.html"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="Website.html">HOME</a></li>
                <li><a href="Lost.html">LOST</a></li>
                <li><a href="Found.html">FOUND</a></li>
                <li><a href="Website.html">ABOUT</a></li>
                <li><a href="Website.html">CONTACT</a></li>
            </ul>
        </div>	
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div img id="login-bg" src="images/login_bg.jpg">
        <form id="login-form" method="POST" action="">
            <h3>Have an account?</h3>
            <input class="form-field" name="email" type="email" placeholder="Email" required>
            <input class="form-field" name="password" type="password" placeholder="Password" required>
            <input class="form-field form-submit" type="submit" name="login" id="loginsubmit" value="Sign In">
            <a id="register-link" href="register.php">Don't have an account? Register now!</a>
        </form>
    </div>





<script>
	// JavaScript for hidden Menu
	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}
</script>
</body>
  