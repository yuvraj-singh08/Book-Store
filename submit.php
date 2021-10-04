<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    
    // if($con){
    //     echo "Successfully connected";
    // }

    $user_name = $_POST['user_name'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `book store`.`profile` (`user_name`,`address`,`password`) VALUES('$user_name','$address', '$password');";
    // echo "<br> ".$sql;
    $con -> query($sql);
    // if($con -> query($sql) == true){
    //     echo "Succesfully Inserted";
    // }
    // else{
    //     echo "ERROR: $sql <br> $con->error";
    // }
    $con->close();

?>