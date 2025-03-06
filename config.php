<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

$SERVER =  "localhost";
$USERNAME = "root";
$PASSWORD =  "";
$DBNAME = "railway";

// Try connecting to the Database
$conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);

//Check the connection
if($conn)
{
    echo "connection ok";
}
else{
    echo "connection failed".mysqli_connect_error();
}
?>

