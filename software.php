<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'software';

//opening a connetion
$conn = new mysqli ($hostname, $username, $password, $database);

if ($conn->connect_error) {
  die($conn->connect_error);
}
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$questions = $_POST['questions'];

$query = "INSERT INTO software(fName, lName, email, phone, level, question) values('$fName','$lName','$email','$phone','$level','$questions')";

$result = $conn->query($query);
echo "string";
if (!$result){
  echo "Submit failed";
}
else {
echo "Insert successfully"."<br/>";
}

$query = "select * from trainee";
$result = $conn->query($query);

if (!$result){
  echo "select error";
}

while($row = mysqli_fetch_array($result)){
  echo $row['ID']." ".$row['FName']." ".$row['LName']." ".$row['Email']." ".$row['Phone']."<br/>";
}

?>
