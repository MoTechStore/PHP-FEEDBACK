<?php

switch($_POST['gender']){
     case 'male':
     case 'MALE':
     case 'female':
     case 'FEMALE':
     echo "<h2> Thank You For Your Response <br/>
     Your Gender Is : ".$_POST['gender']."</h2>";
     break;
     default:
     echo "<h2><span style=\"color: red;\">Invalid Input Retry</h2>";
}

/*

This php script is responsible for processing data obtained in form.html
that is is places on form action


*/

?>