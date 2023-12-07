<?php

$con=new mysqli('localhost','root','','school management system');
if (isset($_POST['submit']))
{
	$Roll_Number=$_POST['RollNumber'];
	$Name=$_POST['Name'];
	$Age=$_POST['Age'];
	$Email=$_POST['Email'];
	$Phone_Number=$_POST['PhoneNumber'];
	$sql="INSERT INTO `stud_info`(`Roll Number`, `Name`, `Age`, `Email`, `Phone Number`) VALUES ('$Roll_Number', '$Name', '$Age', '$Email', '$Phone_Number')";
	mysqli_query($con,$sql);
	echo "alert('Thank you for registration 👍🏻')";
}
$con->close();

?>
