<?php
// Connect to your database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "train";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$class = $_POST['class'];
$trainnumber = $_POST['trainnumber'];
$checkInDatetime = $_POST['checkInDatetime'];
$departure_station = $_POST['departure_station'];
$destination_station = $_POST['destination_station'];


// Insert data into database
$sql = "INSERT INTO train(name, phone, class, trainnumber, checkInDatetime, departure_station, destination_station)
VALUES ('$name', '$phone', '$class','$trainnumber','$checkInDatetime','$departure_station','$destination_station')";

if ($conn->query($sql) === TRUE) {
    echo "Ticket booking confirmed!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Minute Train Ticket Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>booking details</Details></h1>
        <p><strong>Name:</strong> <?= ($name) ?></p>
        <p><strong>Phone Number:</strong> <?= ($phone) ?></p>
        <p><strong>Class:</strong> <?= ($class) ?></p>
        <p><strong>Train number:</strong> <?= ($trainnumber) ?></p>
        <p><strong>Check-In Date-Time:</strong> <?= ($checkInDatetime) ?></p>
        <p><strong>Departure-station:</strong> <?= ($departure_station) ?></p>
        <p><strong>Destination-station:</strong> <?= ($destination_station) ?></p>


         </p>
    </div>
</body>
</html>
