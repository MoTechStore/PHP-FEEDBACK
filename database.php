<?php
// create connection
$conn = mysqli_connect("localhost","root","","books");
// check connection
if(! $conn){
	die("Connection failed :". mysqli_connect_error());
}
//echo "Connection Successfully Established";
//close connection
//mysqli_close($conn);

?>