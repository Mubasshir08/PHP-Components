<?php
// including connection
include ('dbcon.php');

if(isset($_POST['submit-btn'])){
    $name = $_POST['username'];
    $pass = $_POST['password']; 

    $update_query = "UPDATE users SET password = '$pass' WHERE name = '$name' AND id = 1";
    $query_run = mysqli_query($conn, $update_query);
  
    if($query_run){
        echo "<h1>". "Successfully Upadate". "</h1>";
    }
    else{
        echo "<h1>". "Failed to Update Data". "</h1>";
    }
}
