<!-- <?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

// Database connection
$conn = new mysqli('localhost','root','root','nss');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into registration(name, email, password, phone, gender) values(?, ?, ?, ?, ?)");
  $stmt->bind_param("sssis", $name, $email, $password, $phone, $gender);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
}
?> -->


<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'root','nss');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

// database insert SQL code
$sql = "INSERT INTO `registration` (`id`, `name`, `email`, `password`, `phone`, `gender`) VALUES ('0', '$name', '$email', '$password', '$phone', '$gender')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registration successfully...";
}

?>