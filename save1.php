<?php
// Define database connection parameters
$servername = "localhost";
$username = "if0_37491980";
$password = "dynamicak";
$dbname = "if0_37491980_tollsystem"; //table name:ts11

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$car_number = $_POST['car_number'];
$distance_travelled = $_POST['distance_travelled'];
$average_speed = $_POST['average_speed'];
$obu_connection = $_POST['obu_connection'];

// Calculate the toll
$calculated_toll = $distance_travelled * $average_speed;

// Check if the car number plate already exists1
$check_sql = "SELECT * FROM ts1 WHERE numberplate = '$car_number'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    // Car number plate exists1, fetch current amount
    $row = $result->fetch_assoc();
    $current_amount = $row['wallet'];

    // Calculate the new amount
    $new_amount = $current_amount - $calculated_toll;

    // Update the data
    $sql = "UPDATE ts1 SET distance = '$distance_travelled', speed = '$average_speed', obu = '$obu_connection', tollcalc = '$calculated_toll', wallet = '$new_amount' WHERE numberplate = '$car_number'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Car number plate does not exist, show error message
    echo "Error: Car number plate entered is not registered";
}

// Close the connection
$conn->close();
?>
