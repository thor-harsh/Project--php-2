<?php

$server='localhost';
$username='root';
$password='';
$database='user';


$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    dead("Failed to connect ".mysqli_connect_error());
}
// else{
//     echo "success";
// }



?>
