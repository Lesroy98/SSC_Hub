<?php
include 'db_connection.php';
 
$conn = OpenCon();
 
echo "Connected Successfully";
 


$sql = "INSERT INTO event_rating (event_id, event_name, user_feedback, rating, user_email)
VALUES ( 2, 'Life', 'I thiught abadshs', 5 , 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



 CloseCon($conn);
?>