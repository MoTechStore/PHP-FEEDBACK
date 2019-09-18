<?php
include "database.php";

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback(name,email,feedback) VALUES ('$name','$email','$feedback')";

if($result = mysqli_query($conn,$sql)){
	echo "<h3><span style=\"color: green;\">Feedback Successfully Sent</span></h3>";
}
else{
   echo "<h3><span style=\"color: red;\">Feedback Not Sent,Failed</span></h3>";

}

/*
try to drop table feedback and see what happen
now fill in form to see what happen
it fail since no table , so do not forget connection to the
database, creation of database and table, bring back your table
*/

?>