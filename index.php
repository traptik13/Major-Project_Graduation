<?php include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Railway Reservation Management System</title>
<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>

<!-- Header -->
<header class="header">
<nav class="nav">
<a href="#" class="nav_logo">Indian Railway</a>
<ul class="nav_items">
<li class="nav_item">
<a href="index.php" class="nav_link">Home</a>
<a href="find_trains.php" class="nav_link">Find Trains</a>
<a href="reservation.php" class="nav_link">Reservation</a>
<a href="history.php" class="nav_link">Booking History</a>
<a href="about.html" class="nav_link">About</a>
</li>
</ul>
<button class="button" id="form-open">Login</button>
</nav>
</header>

<!-- Home -->
<section class="home">
<div class="form_container">
<i class="uil uil-times form_close"></i>

<!-- Login From -->
<div class="form login_form">
<form action="login.php" method="POST">
<h2>LOGIN</h2>
<div class="input_box">
<input type="email" name="email"   autocomplete="off" placeholder="ENTER YOUR EMAIL" required />
<i class="uil uil-envelope-alt email"></i>
</div>
<div class="input_box">
<input type="password" name="pwd"   autocomplete="off" placeholder="ENTER YOUR PASSWORD" required />
<i class="uil uil-lock password"></i>
<i class="uil uil-eye-slash pw_hide"></i>
</div>
<div class="option_field">
<span class="checkbox">
<input type="checkbox" id="check" />
<label for="check">Remember me</label>
</span>
<a href="#" class="forgot_pw">Forgot password?</a>
</div>
<input type="submit" class="form_control" name="login" value="LOGIN NOW "><div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
</form>
</div>

<!-- Signup From -->
<div class="form signup_form">
<form action="register.php" method="POST">
<h2>SIGNUP</h2>

<div class="input_box">
<input type="text"  name="name"   autocomplete="off" placeholder="NAME" required />
<i class="uil uil-user name"></i>
</div>
<div class="input_box">
<input type="date" name="dob"   autocomplete="off" placeholder="DOB" required />
<i class="uil uil-calendar-alt date"></i>
</div>
<div class="input_box">
<input type="text" name="gender"   autocomplete="off" placeholder="GENDER" required />
<i class="uil uil-circle gender"></i>
</div>
<div class="input_box">
<input type="tel" name="mbl"   autocomplete="off" placeholder="MOBILE NO" required />
<i class="uil uil-mobile-android-alt tel"></i>
</div>
<div class="input_box">
<input type="email" name="email"   autocomplete="off" placeholder="ENTER YOUR EMAIL" required />
<i class="uil uil-envelope-alt email"></i>
</div>
<div class="input_box">
<input type="password" name="pwd"   autocomplete="off" placeholder="CREATE PASSWORD" required />
<i class="uil uil-lock password"></i>
<i class="uil uil-eye-slash pw_hide"></i>
</div>
<input type="submit" class="form_control" name="insert_value" value="SIGNUP NOW "> 
<div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
</form>
</div> 
</div>
</section>
<script src="script.js"></script>
</body>
</html>





