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

.p {
writing-mode: vertical-rl;
text-orientation: ;
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
<br><br><br>
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
        //create and execute query
        $sql = "SELECT * FROM studentdata";
        $result = $conn->query($sql);
        //check if records were returned
        if ($result->num_rows > 0) {
                //create a table to display the record
                echo '<table cellpadding=11 cellspacing=2 border=1 width="80%" align="center" style="border-collapse:collapse ;background-color:rgba(0, 0, 0, 0.5); color: white;">';
                echo '<tr><td align="left" colspan="3">Student Information</td></tr>'; 
                // output data of each row
                while($row = $result->fetch_assoc()) {
                        echo '</tr><tr>';
                        echo '<td width="30%" align="left"><b>Name</b></td><td width="2%" >:</td><td width="68%" align="left">'.$row["Name"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Identification Card</b></td><td>:</td><td align="left">'.$row["IdentificationCard"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Email</b></td><td>:</td><td align="left">'.$row["StudentEmail"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Gender</b></td><td>:</td><td align="left">'.$row["StudentGender"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Religion</b></td><td>:</td><td align="left">'.$row["StudentReligion"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Nation</b></td><td>:</td><td align="left">'.$row["StudentNation"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Phone Number</b></td><td>:</td><td align="left">'.$row["StudentPhone"].'</td>';
                        echo '</tr><tr>'; 

                        echo '<td align="left"><b>Student Mobile</b></td><td>:</td><td align="left">'.$row["StudentMobile"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Student ADD</b></td><td>:</td><td align="left">'.$row["StudentADD"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father Name</b></td><td>:</td><td align="left">'.$row["FatherName"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father IC</b></td><td>:</td><td align="left">'.$row["FatherIC"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father Email</b></td><td>:</td><td align="left">'.$row["FatherEmail"].'</td>';
                        echo '</tr><tr>'; 

                        echo '<td align="left"><b>Father Religion</b></td><td>:</td><td align="left">'.$row["FatherReligion"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father Nation</b></td><td>:</td><td align="left">'.$row["FatherNation"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father Phone</b></td><td>:</td><td align="left">'.$row["FatherPhone"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father Mobile</b></td><td>:</td><td align="left">'.$row["FatherMobile"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father ADD</b></td><td>:</td><td align="left">'.$row["FatherADD"].'</td>';
                        echo '</tr><tr>'; 

                        echo '<td align="left"><b>Father Occupation</b></td><td>:</td><td align="left">'.$row["FatherOccupation"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father Income</b></td><td>:</td><td align="left">'.$row["FatherIncome"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Father Dependent</b></td><td>:</td><td align="left">'.$row["FatherDependent"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Mother Name</b></td><td>:</td><td align="left">'.$row["MotherName"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Mother IC</b></td><td>:</td><td align="left">'.$row["MotherIC"].'</td>';
                        echo '</tr><tr>'; 

                        echo '<td align="left"><b>Mother Email</b></td><td>:</td><td align="left">'.$row["MotherEmail"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Mother Religion</b></td><td>:</td><td align="left">'.$row["MotherReligion"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Mother Nation</b></td><td>:</td><td align="left">'.$row["MotherNation"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Mother Phone</b></td><td>:</td><td align="left">'.$row["MotherPhone"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Mother Mobile</b></td><td>:</td><td align="left">'.$row["MotherMobile"].'</td>';
                        echo '</tr><tr>'; 

                        echo '<td align="left"><b>Mother ADD</b></td><td>:</td><td align="left">'.$row["MotherADD"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Mother Occupation</b></td><td>:</td><td align="left">'.$row["MotherOccupation"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Mother Income</b></td><td>:</td><td align="left">'.$row["MotherIncome"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Academic IC</b></td><td>:</td><td align="left">'.$row["AcademicIC"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Course</b></td><td>:</td><td align="left">'.$row["Course"].'</td>';
                        echo '</tr><tr>'; 

                        echo '<td align="left"><b>Course Code</b></td><td>:</td><td align="left">'.$row["CourseCode"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Program</b></td><td>:</td><td align="left">'.$row["Program"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Session</b></td><td>:</td><td align="left">'.$row["Session"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>ID</b></td><td>:</td><td align="left">'.$row["ID"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Status</b></td><td>:</td><td align="left">'.$row["Status"].'</td>';
                        echo '</tr><tr>'; 

                        echo '<td align="left"><b>Introduction to Programming</b></td><td>:</td><td align="left">'.$row["IntroductiontoProgramming"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>HumanComputer Interaction</b></td><td>:</td><td align="left">'.$row["HumanComputerInteraction"].'</td>';
                        echo '</tr><tr>'; 
                        echo '<td align="left"><b>Computer Organization and Architecture</b></td><td>:</td><td align="left">'.$row["ComputerOrganizationandArchitecture"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Operating System</b></td><td>:</td><td align="left">'.$row["OperatingSystem"].'</td>';
                        echo '</tr><tr>'; 
                        echo '<td align="left"><b>Discrete Mathematics 1</b></td><td>:</td><td align="left">'.$row["DiscreteMathematics1"].'</td>';
                        echo '</tr><tr>';
                        echo '<td align="left"><b>Bahasa Melayu Komunikasi2</b></td><td>:</td><td align="left">'.$row["BahasaMelayuKomunikasi2"].'</td>';
                        echo '</tr><tr>'; 

































                        echo '<td><a type="button" href="searchRecord.php" class="button">Search</a></li></button></td><td></td>
                                        <td><a type="button" href="deleteList.php" class="button">Delete</a></li></button></td>'; 
                        echo '</tr><tr>';
                        echo '<td align="left" colspan="3"></td>';
                        echo '</tr><tr>';
                }
        }
        else {
                echo "0 results"; //if no record found in the database
        }
        //close connection
        $conn->close();
        ?>
</body>
</html>