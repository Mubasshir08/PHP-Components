<?php
// including connection
include ('dbcon.php');

if(isset($_POST['submit-btn'])){
    $name = $_POST['username'];
    $pass = $_POST['password']; 
    $query = "INSERT INTO users (name,password) VALUES ('$name', '$pass')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo "<h1>" . "Data Inserting Done" . "</h1>";
    }
    else{
        echo "<h1>" . "Data Inserting Failed" . "</h1>";
    }
}
 


