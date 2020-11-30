<?php
$servername="localhost";
$username="root";
$password="";
$comment="";

$conn=mysqli_connect($servername,$username,$password,"dribbleddoodle")or die("Connection failed:");
if($conn){
    extract($_GET);
    $comment="INSERT INTO commentstable(comment) VALUES ('$comment')";
}

?>