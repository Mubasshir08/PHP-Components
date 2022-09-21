<?php
// including connection
include ('dbcon.php');

// checking the existing data
if(isset($_POST['submit-btn'])){
    $name = $_POST['username'];
    $pass = $_POST['password']; 
    $query = "SELECT * FROM users WHERE name = '$name' AND password = '$pass'";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
       // print_r($query_run);
        echo 'successfully founded data';
       // print_r (mysqli_num_rows($query_run)); it's filter the actual matching data row number
    }
}
