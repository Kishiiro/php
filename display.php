<?php 
include'connect.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Display</title>
</head>
<body>
<button><a href="user.php">Add user</a></button>
<table class="table">
<thead>
<tr>
<th scope="col ">idno</th>
<th scope="col">firstname</th>
<th scope="col">lastname</th>
<th scope="col">course</th>
<th scope="col">opration</th>
</tr>
</thead>
<tbody>
<?php
$sql= "Select * from `user`";
$result=mysqli_query($con,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$idno = $row['idno'];
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$course = $row['course'];
echo'<tr>
<th scope="row">'.$idno.'</th>
<td>'.$firstname.'</td>
<td>'.$lastname.'</td>
<td>'.$course.'</td>
<td>
<button><a href="delete.php?deleteid='.$idno.'">Delete</a><button>
<button><a href="update.php?updateid='.$idno.'">Update</a><button>
</td>
</tr>';
}
}
?>
</tbody>
</table>
</body>
</html>