<?php
include ('config.php');

error_reporting(0);

//PNR 

$read = "SELECT*FROM booking ORDER BY PNR DESC LIMIT 1";
$result = mysqli_query($conn,$read);
if($result)
{
$fetch = mysqli_fetch_assoc($result);
$lastpnr = $fetch['PNR'];
if($lastpnr == null)
{
$newpnr = "PNR09540000";
}
else
{
$newpnr = str_replace("PNR0954", "", $lastpnr);
$newpnr = str_pad($newpnr+1,4,0,STR_PAD_LEFT);
$newpnr = "PNR0954" . $newpnr;
}
}
else
{
	echo "server down";
}
if (isset($_POST['submit']))
{
$pnr = $_POST['pnr'];
$na = $_POST['c_na'];
$tn = $_POST['tn'];
$fstn = $_POST['fstn'];
$tstn = $_POST['tstn'];
$date = $_POST['date'];
$nos = $_POST['nos'];
$qu = $_POST['qu'];

$query = "INSERT INTO booking (PNR,C_NAME,TRAIN_NO,FSTN,TSTN,B_DATE,NO_OF_SEATS,QUOTA) 
VALUES ('$pnr', '$na', '$tn', '$fstn', '$tstn', '$date', '$nos', '$qu')";
$data = mysqli_query($conn,$query);
if($data)
{
	header("Location:payment.php");
}   
else 
{
	header("Location:index.php");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Railway Reservation Management System</title>
<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<link rel="stylesheet" href="" />

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
}
body {
height: 600px;
display: flex;
align-items: center;
justify-content: center;
padding: 20px;
background-image: url("bgpp.jpg");
}
.container {
position: relative;
max-width: 400px;
height: 570px;
width: 100%;
background: #fff;
padding: 5px;
border-radius: 8px;
box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
h1 {
margin-bottom: 20px;
color: #333;
text-align: center;
}
.container .form {
margin-top: 10px;
}
.form .input-box {
width: 100%;
margin-top: 20px;
}
.input-box label {
color: #333;
}
.form :where(.input-box input, .select-box) {
position: relative;
height: 40px;
width: 100%;
outline: none;
font-size: 1rem;
color: #707070;
margin-top: 8px;
border: 1px solid #ddd;
border-radius: 6px;
padding: 0 15px;
}
.input-box input:focus {
box-shadow: 0 1px 0 #7d2ae8;
}
.input-box input:hover {
background: #cfbde7;
}
.form .column {
display: flex;
column-gap: 15px;
}
address :where(input, .select-box) {
margin-top: 15px;
}
.select-box select {
height: 100%;
width: 100%;
outline: none;
border: none;
color: #707070;
font-size: 1rem;
}
.container .form_control {
height: 30px;
width: 25%;
color: #fff;
font-size: 1rem;
font-weight: 400;
margin-top: 30px;
border-radius: 10%;
cursor: pointer;
transition: all 0.2s ease;
background: #7d2ae8;
margin-left: 135px;
}
.container .form_control:hover {
background: rgb(88, 56, 250);
}
@media screen and (max-width: 500px) {
.form .column {
flex-wrap: wrap;
}
.form :where(.gender-option, .gender) {
row-gap: 15px;
}
}
</style>   
</head>

<body>
<section class="container">
<h1>RESERVATION FORM</h1>
<form action="" method="POST" class="form">
<div class="input-box">
<input type="text" id="pnr" value="<?php echo $newpnr; ?>" name="pnr" readonly/>  
</div>
<div class="input-box">
<input type="text" name="c_na" placeholder="ENTER FULL NAME" required />
</div>
<div class="input-box">
<input type="value" name="tn"  placeholder="TRAIN_NO" required />
</div>
<div class="column">
<div class="input-box">
<input type="text" name="fstn"  placeholder="FROM STATION" required />
</div>
<div class="input-box">
<input type="text" name="tstn"  placeholder="TO STATION" required />
</div>
</div>
<div class="input-box">
<input type="date" name="date" placeholder="DATE" required />
</div>
<div class="input-box">
<input type="value" name="nos" placeholder="NO OF SEATS" required />
</div>        
<div class="column">
<div class="select-box" >
<select name="qu">
<option hidden name="qu">QUOTA</option>
<option>1AC</option>
<option>2AC </option>
<option>3AC</option>
<option>SL</option>
<option>GEN</option>
</select>
</div>
</div>
<input type="submit" class="form_control" name="submit" value="BOOK" onclick="btn()">
</form>
</section>

<script>
function btn()
{
alert("Please confirm! All of the information is right")
btn2()
}
function btn2()
{
alert("Now! Make the Payment");
}
</script>
</body>
</html>