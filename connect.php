<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$dob = filter_input(INPUT_POST, 'dob');
$email = filter_input(INPUT_POST, 'email');
$createpassword = filter_input(INPUT_POST, 'createpasword');
$confirmpassword = filter_input(INPUT_POST, 'confirmpassword');
if (!empty($firstname)){
if (!empty($lastname)){
   


$conn=new mysqli('localhost','root','','agrihelper');


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO AgriHelper_signup (firstname,lastname,dob,email,createpassword,confirmpassword)
values ('$firstname','$lastname','$dob','$email','$createpassword','$confirmpassword')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "FIRSTAME should not be empty";
die();
}
}
else{
echo "LASTname should not be empty";
die();
}







?>