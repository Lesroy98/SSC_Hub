<?php
include 'db_connection.php';

$conn = OpenCon();
$user_feedback = mysqli_real_escape_string($conn, $_POST['comments']);
$rating = filter_input(INPUT_POST, 'rating');
echo "Connected Successfully";
 


$sql = "INSERT INTO event_rating (event_id, event_name, user_feedback, rating, user_email)
VALUES ( 2, 'Life','$user_feedback', $rating , 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



 CloseCon($conn);
?>