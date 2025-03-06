<?php
include('config.php');

if (isset($_POST['login']))
{
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$query = "SELECT * FROM register WHERE email = '$email' AND pass_word= '$pwd' ";
$data = mysqli_query($conn, $query);
if($data)
{
header("Location:find_trains.php");
}
else 
{
header("Location:index.php");
}
}
?>

		