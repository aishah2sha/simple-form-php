<?php

 // connect to the database
 $conn = mysqli_connect('localhost', 'aishah', 'admin1395', 'laundry');

 // check connection
 if(!$conn){
     echo 'Connection error: '. mysqli_connect_error();
 }


?>