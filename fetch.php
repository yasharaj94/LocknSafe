<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="">
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<style type="text/css">
	

.btn{
  margin:5px;
  border:solid;
  
.pt-3-half {
    padding-top: 1.4rem;
}

</style>



    <body>

    <div class="btn-group">
    
        <a href = "admin.php"><button type="button" class="btn btn-info">Back</button></a>
         <a href = "logout.php"><button type="button" class="btn btn-info" >Logout</button></a>
         
          <a href = "excel/export.php"><button type="button" class="btn btn-info" >Generate Report</button></a>
      </div><div></div>
  </body>
  </html>



              

    

<?php
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM login";
$result = $conn->query($sql);
?>
<div class="container">
    <h2> Locker Details</h2>
    <div class="table-responsive">
    <table border="1" class="table table-striped table-hover  table-bordered">



<tr>
<th>Id</th>
<th>Student 1</th>
<th>Student 2</th>
<th>USN 1</th>
<th>USN 2</th>
<th>Mobile</th>
<th>email</th>
</tr>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

 echo "<tr>";
  echo "<td>" . $row['booked'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['name2'] . "</td>";
  echo "<td>" . $row['usn'] . "</td>";
  echo "<td>" . $row['usn2'] . "</td>";
  echo "<td>" . $row['mobile_no'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";

echo"</div></div></td>
    </tr><tr>";

           
    }
} else {
    echo "0 results";
}
$conn->close();
?>




 
