<?php
include'connect.php';
if(isset($_GET['deleteid'])){
$idno=$_GET['deleteid'];
$sql="delete from `user` where idno=$idno";
$result=mysqli_query($con,$sql);
if($result){
header ('location:display.php');
}else{
die(mysqli_error($con));
}
}
?>