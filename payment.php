<?php
include ('config.php');

if (isset($_POST['make_payment']))
{
$cno = $_POST['cno'];
$chn = $_POST['chn'];
$exp = $_POST['exp'];
$cvv = $_POST['cvv'];

$query = "INSERT INTO payment (CARD_NO,CARD_H_NAME,E_DATE,CVV )
VALUES ('$cno', '$chn', '$exp', '$cvv')";	
$data = mysqli_query($conn,$query);
if($data)
{
header("Location:history.php");
}
else 
{
echo "Data not inserted";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Railway Reservation Management System</title>
<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<link rel="stylesheet" href="style3.css">

<style>
body {
font-family: Arial, sans-serif;
background-color: #f5f5f5;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;
background-image: url("bgpp.jpg");
}
.container {
background-color: #fff;
padding: 20px;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
max-width: 400px;
width: 100%;
text-align: center;
}
.column {
display: flex;
justify-content: space-between;
align-items: center; /* Center vertically */
}
.input-group.flex {
flex-basis: calc(50% - 10px);
}
.column .input-group input[type="text"],
.column .input-group input[type="date"] {
width: 100%; /* Make the inputs take full available width */
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
font-size: 16px;
outline: none;
transition: border-color 0.3s;
}
h1 {
margin-bottom: 20px;
color: #333;
}
.input-group {
margin-bottom: 15px;
text-align: left;
}
label {
display: block;
margin-bottom: 5px;
color: #333;
font-weight: bold;
}
input[type="text"] {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
font-size: 16px;
outline: none;
transition: border-color 0.3s;
}
input[type="text"]:focus {
border-color: #7ed321;
}
input[type="submit"] {
background-color: #7d2ae8;
color: #fff;
border: none;
padding: 10px 20px;
border-radius: 4px;
font-size: 18px;
cursor: pointer;
transition: background-color 0.3s;
display: block;
margin: 0 auto;
}
input[type="submit"]:hover {
background-color: rgb(88, 56, 250);
}
</style>
</head>

<body>
<div class="container">
<h1>MAKE PAYMENT</h1>
<form action="payment.php" method="POST">
<div class="input-group">
<input type="text" id="card-number" name="cno" placeholder="CARD NUMBER" required>
</div>
<div class="input-group">
<input type="text" id="card-holder" name="chn" placeholder="CARD HOLDER NAME" required>
</div>
<div class="column">
<div class="input-group">
<input type="text" id="expiry" name="exp" placeholder="EXPIRY DATE" readonly>
</div>
<div class="input-group">
<input type="date" id="expiry" name="exp" placeholder="EXPIRY DATE" required></div>
</div>
<div class="input-group">
<input type="text" id="cvv" name="cvv" placeholder="CVV" required>
</div>
<div class="input-group">
<input type="submit" name="make_payment" value="Pay Now" onclick ="btn()">           
</div>
</form>
</div>

<script>
function btn(){
alert("Please confirm! All of the information is right")
btn2()
}
function btn2(){
alert("Congratulation! You have Successfully booked a ticket");
}
</script>
</body>
</html>

