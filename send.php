<?php
$conn=mysqli_connect('localhost','root','','task');
if(isset($_POST['sub'])){
    $name =$_POST['name'];
    $message = $_POST['msg'];
    $sql="INSERT INTO `send_data`(`name`, `message`) VALUES ('$name','$message')";
    $res=mysqli_query($conn,$sql);
    if($res){
        header('location:comment.php');
    }
}

?>