<?php
// including connection
include ('dbcon.php');

if(isset($_POST['submit-btn'])){
    $name = $_POST['username'];
    $pass = $_POST['password']; 
    $query = "DELETE FROM users WHERE name = '$name' AND password = '$pass'";
    $query_run = mysqli_query($conn, $query);
}
