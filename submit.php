<?php
include 'db_connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $service_needed = $_POST['service_needed'];
    $preferred_date = $_POST['preferred_date'];
    $preferred_time = $_POST['preferred_time'];
    $message = $_POST['message'];

    $sql = "INSERT INTO bookings (name, email, phone, address, service_needed, preferred_date, preferred_time, message)
            VALUES ('$name', '$email', '$phone', '$address', '$service_needed', '$preferred_date', '$preferred_time', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successfully created!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
