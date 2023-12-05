<?php
 
 $host = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'dbdetails';

 $conn = mysqli_connect($host,$username,$password,$database);

 if(!$conn){
    die("Connection Failed ". mysqli_connect_error());
 }

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO studdetails(email,pass) VALUES ('$email','$pass')";

if(mysqli_query($conn,$sql)){
   echo "Record submitted";
} else{
   echo "Error".$mysli_error($conn);
}

mysqli_close($conn);

?>