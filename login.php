<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
$user_name = $_POST['user_name'];
$password = $_POST['password'];
echo $user_name."<br>";
echo $password."<br>";

$sql = "SELECT * FROM `book store`.`profile`";
$pass = $con->query($sql);
// if($con -> query($sql) == TRUE){
//     echo "Succesfully Inserted";
// }
// else{
//     echo "ERROR: $sql <br> $con->error";
// }

echo "hey ". $pass." fuck";
// SELECT password FROM `book store`.`profile` where user_name=='$user_name'
?>