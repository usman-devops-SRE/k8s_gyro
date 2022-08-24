<?php
session_start();
$user='';
$pass='';
$conn = mysqli_connect('mysql1', 'root', 'hglmx-5*B', 'gyro cafe'); #mysqli_connect('172.18.0.2', 'root');
if($conn){
   # echo "Connection successful";
    
}else{
    echo "No Connection";
}
$db = mysqli_select_db($conn, 'gyro cafe');

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $sql = " select * from admin where user = '$user' and pass = '$pass' " ;
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
        if($row==1){
           # echo "login successful";
            $_SESSION['user'] = $user;
            header('location:admingyrocafe.html');
        }else{
            echo "login failed: incorrect credentials";
            header('location:admin.html');
        }
    
}


?>
