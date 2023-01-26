<?php
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($email)){
if (!empty($password)){
//if (!empty($Repeatpassword)){
$host = "localhost";
$dbemail = "root";
$dbpassword = "";
$dbname = "mobile";
// Create connection
$conn = new mysqli ($host, $dbemail, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO mechanic (email,password)
values ('$email','$password')";

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
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}

?>