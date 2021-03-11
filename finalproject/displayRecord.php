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
  
  //escape special characters in a string
  $adName = mysqli_real_escape_string($conn, $_POST['student_name']);

  //create and execute query
  $sql = "SELECT * FROM studentdata WHERE studentName LIKE '%$adName%'";
  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo 'Selected record as the following: <br><br>';
     echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<tr><td align="center"><b>No</b></td>
     <td align="center"><b>Student Name</b></td>
     <td align="center"><b>Student Ic</b></td>
     <td align="center"><b>Student Id</b></td>
     <td align="center"><b>Student Course Code</b></td>
     <td align="center"><b>Student Phone No</b></td>
     <td align="center"><b>Student Address</b></td>
     <td align="center">&nbsp&nbsp</td>
     </tr>';
     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["Bil"].'</td>';
        echo '<td align="center">'.$row["StudentName"].'</td>';
        echo '<td align="center">'.$row["StudentIdentificationCard"].'</td>';
        echo '<td align="center">'.$row["StudentIdNumber"].'</td>';
        echo '<td align="center">'.$row["StudentCourseCode"].'</td>';
        echo '<td align="center">'.$row["StudentPhoneNumber"].'</td>';
        echo '<td align="center">'.$row["StudentAddress"].'</td>';  
        ?>
        <td><a href="editRecord.php?id=<?php echo $row["Bil"]; ?>">UPDATE</a></td></tr>
        <?php
        echo '</tr>';
     }
     echo '</table></p>';
  } 
  else {
    echo '<font color=red>No record found';
  }

  //close connection 
  $conn->close();

?>