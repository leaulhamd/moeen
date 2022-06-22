
<?php
// database connection code
if (isset($_POST['name'])) {
	// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
	$con = mysqli_connect('localhost', 'root', '', 'db_connect');

	// get the post records

	$txtName = $_POST['name'];
	$txtEmail = $_POST['email'];
	$txtSubject = $_POST['subject'];
	$txtMessage = $_POST['message'];

	// database insert SQL code
	$sql = "INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject', '$txtMessage')";

	// insert in database 
	$rs = mysqli_query($con, $sql);
	if ($rs) {
		header("Location: thankyou.html");
		exit();
	}
} else {
	echo "Are you a genuine visitor?";
}
?>