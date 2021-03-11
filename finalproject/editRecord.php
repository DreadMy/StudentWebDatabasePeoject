<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="navbar.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("uni.jpg");

  min-height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  top: 50px;
  right: 420px;
  background-color:rgba(0, 0, 0, 0.5);
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}

</style>
</head>
<body>

<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="faq.html">FAQ</a></li>
  <li><a href="about.html">About</a></li>
  <li style="float:right"><a class="active" href="home.html">STUDENT INFORMATION DATABASE WEB SYSTEM</a></li>
</ul>

<div class="bg-img">




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }

$Bil=$_REQUEST['id'];
$query = "SELECT * from studentdata where Bil='".$Bil."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update Record</h1>

<div>
<form name="form" method="post" action="view.php"> 
<input type="hidden" name="new" value="1" />
<input name="Bil" type="hidden" value="<?php echo $row['Bil'];?>" />
<p><input type="text" name="$adName" value="<?php echo $row['StudentName'];?>" /></p>
<p><input type="text" name="$member1" value="<?php echo $row['StudentIdentificationCard'];?>" /></p>
<p><input type="text" name="$member2" value="<?php echo $row['StudentIdNumber'];?>" /></p>
<p><input type="text" name="$member3" value="<?php echo $row['StudentCourseCode'];?>" /></p>
<p><input type="text" name="$member4" value="<?php echo $row['StudentPhoneNumber'];?>" /></p>
<p><input type="text" name="$member5" value="<?php echo $row['StudentAddress'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>

</div>
</div>
</body>
</html>