<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "Nidharth@13";

// Create connection
$conn = new mysqli($servername, $username, $password);

?>
<html>
<head>
<title>Requestpage</title>
<link rel="stylesheet"  href="/invoice application/css/style.css">

</head>
<body>
	<h1>Application Request page</h1>
	<div class="container">
		<div>
		<label>Request department name<label>
		<input type="text" placeholder="department">
		</div>
		<div>
		<label >Request User<label>
		<input type="text" placeholder="name">
		</div>
		<div>
		<label>Request date<label>
		<input type="date" placeholder="date">
		</div>
		<div>
		<label>Request amount<label>
		<input type="amount" placeholder="amount">
		</div>
		<div>
		<label>Request copy<label>
		<input type="file">
		</div>
		<input type="submit" value="save">
		<input type="submit" value="cancel">
		
		
	
	</div>

</body>
</html>
<?php
<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	

	// Get all the submitted data from the form
	$sql = "INSERT INTO `dept_req` (`req_num`, `req_dept`, `req_date`, `req_name`, `req_user_id`, `req_raise_date`, `req_amt`, `req_image`) VALUES (NULL, '', '', '', '', '', '','')";

	// Execute query
	mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>
>