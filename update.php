<?php
include'connect.php';
$idno=$_GET['updateid'];
$sql="SELECT * from `user` where idno=$idno"; 
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$course=$row['course'];
if(isset($_POST['submit'])){
$idno=$_POST['idno'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$course=$_POST['course'];
$sql="update `user` set idno=$idno, firstname='$firstname', lastname='$lastname', course='$course' where idno=$idno";
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
<label style="display:none;">IDNO</label>
<input type="text" class="form" name="idno" value=<?php echo $idno;?> style="display:none;">
<label>Firstname</label>
<input type="text" class="form" name="firstname" value=<?php echo $firstname;?>>
<label>Lastname</label>
<input type="text" class="form" name="lastname" value=<?php echo $lastname;?>>
<label>course</label>
<input type="text" class="form" name="course" value=<?php echo $course;?>>
</div>
<button type="submit" class="btn" name="submit">Update</submit>
</form>
</body>
</html>
