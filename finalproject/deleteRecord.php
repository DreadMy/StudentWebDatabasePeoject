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
  background-color: rgba(0, 0, 0, 0.5);
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

<html>
<head>
<title>Creative Multimedia Competition 2020</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//get input valueS
$Name=$_POST['Name'];
// sql to delete a record
$sql = "DELETE FROM studentdata WHERE name='$Name'";
if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
}
else {
echo "Error deleting record: " . $conn->error;
}
//close connection
$conn->close();
echo '<p><a href="home.html">Back to Home</a></p>';
?>
</body>
</html>