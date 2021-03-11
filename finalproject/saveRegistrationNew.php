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


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */




</style>
</head>
<body>

<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="faq.html">FAQ</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="view.php">View Student Data</a></li>
  <li style="float:right"><a class="active" href="home.html">STUDENT INFORMATION DATABASE WEB SYSTEM</a></li>
</ul>

<div class="bg-img">

<width="104" style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;">STUDENT INFORMATION DATABASE WEB SYSTEM<b>
 
 


 <?php
    $date = date("d-m-Y");
 extract($_POST);




 ?>
 <p>Date: <b><?php print($date) ?></b></p>
 





 <table align="center" border="1" style="background-color:rgba(0, 0, 0, 0.5); color: white;" >
 <th colspan="2" style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;">Student Information</th>
 <tr><td>Name</td>
 <td>:</td>
 <td><b><?php print($Name) ?></b></td>
 </tr>
 <tr><td>Identification Card</td>
 <td>:</td>
 <td><b><?php print($member1) ?></b></td>
 </tr>
 <tr><td>Email</td>
 <td>:</td>
 <td><b><?php print($member2) ?></b></td>
 </tr>
 <tr><td>Gender</td>
 <td>:</td>
 <td><b><?php print($member3) ?></b></td>
 </tr>
 <tr><td>Religion</td>
 <td>:</td>
 <td><b><?php print($member4) ?></b></td>
 </tr>
 <tr><td>Nation</td>
 <td>:</td>
 <td><b><?php print($member5) ?></b></td>
 </tr>
 <tr><td>Phone</td>
 <td>:</td>
 <td><b><?php print($member6) ?></b></td>
 </tr>
 <tr><td>Mobile</td>
 <td>:</td>
 <td><b><?php print($member7) ?></b></td>
 </tr>
 <tr><td>Address</td>
 <td>:</td>
 <td><b><?php print($member8) ?></b></td>
 </tr>
 <th colspan="2" style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;">Father Information</th>
 <tr><td>Name</td>
 <td>:</td>
 <td><b><?php print($member9) ?></b></td>
 </tr>
 <tr><td>IC</td>
 <td>:</td>
 <td><b><?php print($member10) ?></b></td>
 </tr>
 <tr><td>Email</td>
 <td>:</td>
 <td><b><?php print($member11) ?></b></td>
 </tr>
 <tr><td>Religion</td>
 <td>:</td>
 <td><b><?php print($member12) ?></b></td>
 </tr>
 <tr><td>Nation</td>
 <td>:</td>
 <td><b><?php print($member13) ?></b></td>
 </tr>
 <tr><td>Phone</td>
 <td>:</td>
 <td><b><?php print($member14) ?></b></td>
 </tr>
 <tr><td>Mobile</td>
 <td>:</td>
 <td><b><?php print($member15) ?></b></td>
 </tr>
 <tr><td>Address</td>
 <td>:</td>
 <td><b><?php print($member16) ?></b></td>
 </tr>
 <tr><td>Occupation</td>
 <td>:</td>
 <td><b><?php print($member17) ?></b></td>
 </tr>
 <tr><td>Income</td>
 <td>:</td>
 <td><b><?php print($member18) ?></b></td>
 </tr>
 <tr><td>Dependent</td>
 <td>:</td>
 <td><b><?php print($member19) ?></b></td>
 </tr>
 <th colspan="2" style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;">Mother Information</th>
 <tr><td>Name</td>
 <td>:</td>
 <td><b><?php print($member20) ?></b></td>
 </tr>
 <tr><td>IC</td>
 <td>:</td>
 <td><b><?php print($member21) ?></b></td>
 </tr>
 <tr><td>Email</td>
 <td>:</td>
 <td><b><?php print($member22) ?></b></td>
 </tr>
 <tr><td>Religion</td>
 <td>:</td>
 <td><b><?php print($member23) ?></b></td>
 </tr>
 <tr><td>Nation</td>
 <td>:</td>
 <td><b><?php print($member24) ?></b></td>
 </tr>
 <tr><td>Phone</td>
 <td>:</td>
 <td><b><?php print($member25) ?></b></td>
 </tr>
 <tr><td>Mobile</td>
 <td>:</td>
 <td><b><?php print($member26) ?></b></td>
 </tr>
 <tr><td>Address</td>
 <td>:</td>
 <td><b><?php print($member27) ?></b></td>
 </tr>
 <tr><td>Occupation</td>
 <td>:</td>
 <td><b><?php print($member28) ?></b></td>
 </tr>
 <tr><td>Income</td>
 <td>:</td>
 <td><b><?php print($member29) ?></b></td>
 </tr>
 <th colspan="2" style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;">Academic Information</th>
 <tr><td>IC</td>
 <td>:</td>
 <td><b><?php print($member30) ?></b></td>
 </tr>
 <tr><td>Course</td>
 <td>:</td>
 <td><b><?php print($member31) ?></b></td>
 </tr>
 <tr><td>Course Code</td>
 <td>:</td>
 <td><b><?php print($member32) ?></b></td>
 </tr>
 <tr><td>Program</td>
 <td>:</td>
 <td><b><?php print($member33) ?></b></td>
 </tr>
 <tr><td>Session</td>
 <td>:</td>
 <td><b><?php print($member34) ?></b></td>
 </tr>
 <tr><td>ID</td>
 <td>:</td>
 <td><b><?php print($member35) ?></b></td>
 </tr>
 </tr>
 <tr><td>Status</td>
 <td>:</td>
 <td><b><?php print($member36) ?></b></td>
 </tr>
 <tr><td>IntroductiontoProgramming</td>
 <td>:</td>
 <td><b><?php print($member37) ?></b></td>
 </tr>
 <tr><td>HumanComputerInteraction</td>
 <td>:</td>
 <td><b><?php print($member38) ?></b></td>
 </tr>
 <tr><td>ComputerOrganizationandArchitecture</td>
 <td>:</td>
 <td><b><?php print($member39) ?></b></td>
 </tr>
 <tr><td>OperatingSystem</td>
 <td>:</td>
 <td><b><?php print($member40) ?></b></td>
 </tr>
 <tr><td>DiscreteMathematics1</td>
 <td>:</td>
 <td><b><?php print($member41) ?></b></td>
 </tr>
 <tr><td>Bahasa MelayuKomunikasi2</td>
 <td>:</td>
 <td><b><?php print($member42) ?></b></td>
 </tr>




 </table>



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
 //create query
 $sql = "INSERT INTO studentdata (Name, IdentificationCard, StudentEmail, StudentGender, StudentReligion, StudentNation, StudentPhone, StudentMobile, StudentADD, FatherName, FatherIC, FatherEmail, FatherReligion, FatherNation, FatherPhone,	FatherMobile, FatherADD, FatherOccupation, FatherIncome, FatherDependent, MotherName, MotherIC, MotherEmail, MotherReligion, MotherNation, MotherPhone, MotherMobile, MotherADD, MotherOccupation, MotherIncome, AcademicIC, Course, CourseCode, Program, Session, ID, Status, IntroductiontoProgramming,	HumanComputerInteraction, ComputerOrganizationandArchitecture, OperatingSystem, DiscreteMathematics1, BahasaMelayuKomunikasi2)




  VALUES ('$Name', '$member1', '$member2', '$member3', '$member4', '$member5', '$member6', '$member7', '$member8', '$member9', '$member10', '$member11', '$member12', '$member13', '$member14', '$member15', '$member16', '$member17', '$member18', '$member19', '$member20', '$member21', '$member22', '$member23', '$member24', '$member25', '$member26', '$member27', '$member28', '$member29', '$member30', '$member31', '$member32', '$member33', '$member34', '$member35', '$member36', '$member37', '$member38', '$member39', '$member40', '$member41', '$member42')";
 //execute query
 if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
 }
 else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 //close connection
 $conn->close();
 ?>
 <br>
 <form>
 <input type="button" name="printButton" onClick="window.print()" value="Print">
 </form>


 
 <table align="center" border="1" style="background-color:rgba(0, 0, 0, 0.5);" >

</div>
</form>


  </div>
 </div>





 
</body>
</html>
