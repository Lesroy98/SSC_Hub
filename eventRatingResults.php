<?php 
include 'db_connection.php';
 
$conn = OpenCon();
  
$query = "SELECT * FROM event_rating";
mysqli_query($conn, $query) or die('Error querying database.');

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result) ) {
 echo $row['event_id'] . ' ' . $row['user_feedback'] . ': ' . $row['rating'] . ' ' . $row['user_email'] .'<br />';

 }
CloseCon($conn);
?>