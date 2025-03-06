<?php
include ('config.php');

if (isset($_POST['insert_value']))
{
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$mbl = $_POST['mbl'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$query = "INSERT INTO register (U_NAME,DOB,GENDER,MOBILE_NO,EMAIL,PASS_WORD )
VALUES ('$name', '$dob', '$gender', '$mbl', '$email', '$pwd')";
$data = mysqli_query($conn,$query);
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


