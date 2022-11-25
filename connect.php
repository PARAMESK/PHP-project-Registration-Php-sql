<?php

if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','','students')or die("Connection failed:" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['course']) && isset($_POST['address'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $course=$_POST['course'];
        $address=$_POST['address'];

     $sql="INSERT INTO `registration` (`name`, `email`, `password`, `phone`, `course`, `address`) VALUES ('$name','$email','$password','$phone','$course','$address') "  ;
     
     $query=mysqli_query($conn,$sql);
        if($query){
            echo "Entry Successfull";
            echo "Before install XAMPP and create database , table."
         }
        else{
            echo "Error Occured";
        } 

    }

}

?>