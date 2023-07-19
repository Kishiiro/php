<?php
include'connect.php';
if(isset($_POST['submit'])){
$idno=$_POST['idno'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$course=$_POST['course'];
$sql="insert into `user`(idno,firstname,lastname,course)values('$idno','$firstname','$lastname','$course')";
$result=mysqli_query($con,$sql);
if($result){
//echo "Data Insert Success";
header('location:display.php');
}else{
die(mysqli_error($con));
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>create</title>
</head>
<body>
<form method="post">
<div class="form">
<label>IDNO</label>
<input type="text" class="form" name="idno">
<label>Firstname</label>
<input type="text" class="form" name="firstname">
<label>Lastname</label>
<input type="text" class="form" name="lastname">
<label>course</label>
<input type="text" class="form" name="course">
</div>
<button type="submit" class="btn" name="submit">SUBMIT</submit>
</form>
</body>
</html>
