<?php
$con=mysqli_connect("localhost","root","","db1");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM  prof1");

echo "<table border='0'>
<tr>
<th>Name</th>
<th>ID</th>
<th>No_of_Days</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['count'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>