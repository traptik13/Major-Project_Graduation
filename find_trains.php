<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Railway Reservation Management System</title>
<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<style>
body {
font-family: Arial, sans-serif;
position: relative;
height: 100vh;
width: 100%;
background-image: url("wp.jpg");
background-size: cover;
background-position: center;
justify-content: center;
align-items: center;
margin: 0;
display: flex; 
flex-direction: column; 
}
.container {
margin-top: 20px;
display: flex;
justify-content: center;
align-items: center;
height: 60vh; 
}
.card-title {
color: #000000;
font-size: 24px;
font-weight: bold;
margin-left: 130px;
}
.btn-primary {
background-color: #7d2ae8;
border-color: #007bff;
}
.btn-primary:hover {
background-color: #0056b3;
border-color: #0056b3;
}
table {
width: 100%;
border-collapse: collapse;
margin-top: 20px;
}
th, td {
padding: 10px;
text-align: center;
}
th {
background-color: #f2f2f2;
font-weight: bold;
}
tr:nth-child(even) {
background-color: #f2f2f2;
}
a {
color: #007bff;
text-decoration: none;
display: block;
margin-top: 20px;
text-align: center;
}
.button {
display: inline-block;
padding: 10px 20px;
background-color: #7d2ae8;
color: white;
text-decoration: none;
border-radius: 5px;
border: none;
cursor: pointer;
margin-top: 20px;
}
.button:hover {
background-color: #0056b3;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12 mt-4">
<div class="card">
<div class="card-header">
<h4 class="card-title">FIND TRAINS</h4>
</div>
<div class="card-body">
<form action="" method="POST" class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" name="tn" class="form-control" placeholder="TRAIN NO" required> 
</div>
</div>
<div class="col-md-6">
<button type="submit" name="search_by_tn" class="btn btn-primary">FIND</button>
</div>
</form>  
</div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
<thead></thead>
<tr>
<th scope="col">TRAIN_NO</th>
<th scope="col">TRAIN NAME</th>
<th scope="col">SOURCE</th>
<th scope="col">DESTINATION</th>
</tr>
</thead>
<tbody>

<?php
include('config.php');
if(isset($_POST['search_by_tn']))
{
$tn = $_POST['tn'];
$query = "SELECT * FROM list WHERE TRAIN_NO = '$tn'";
$query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)>0)
{
while($row = mysqli_fetch_array($query_run))
{
?>

<tr>
<td><?php  echo $row['TRAIN_NO'];?></td>
<td><?php  echo $row['TRAIN NAME'];?></td>
<td><?php  echo $row['SOURCE'];?></td>
<td><?php  echo $row['DESTINATION'];?></td>
</tr>

<?php
}
}
else
{
?>

<tr>
<td colspan="6">No Record Found</td>
</tr>

<?php
}
}
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
<a href="reservation.php" class="button">BOOK NOW</a>
</html>