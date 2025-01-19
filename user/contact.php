<?php
// Include database conne$connectection file
include '../config/database.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $subject = mysqli_real_escape_string($connect, $_POST['subject']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);

    // Insert data into the database
    $query = "INSERT INTO user_feedback (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($connect, $query)) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent. Thank you!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'There was an error. Please try again.']);
    }
}
