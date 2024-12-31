<?php
// Define database connection parameters
$servername = "localhost";
$username = "if0_37491980";
$password = "dynamicak";
$dbname = "if0_37491980_tollsystem"; //table name:ts1

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$car_number = $_POST['car_number'];
$account_no = $_POST['accountNo'];
$amount = $_POST['amount'];
$country = isset($_POST['country']) ? $_POST['country'] : '';
$lang = isset($_POST['lang']) ? implode(", ", $_POST['lang']) : '';

// Check if email or car number plate already exists1
$checkEmailSql = "SELECT * FROM ts1 WHERE email='$email'";
$checkCarNumberSql = "SELECT * FROM ts1 WHERE numberplate='$car_number'";
$emailResult = $conn->query($checkEmailSql);
$carNumberResult = $conn->query($checkCarNumberSql);

if ($emailResult->num_rows > 0) {
    echo "Error: Email already registered";
} elseif ($carNumberResult->num_rows > 0) {
    echo "Error: Already registered Number plate";
} else {
    // Insert new record
    $sql = "INSERT INTO `ts1`(`username`, `email`, `phone`, `numberplate`, `accountNo`, `wallet`, `country`, `lang`)
            VALUES ('$username', '$email', '$phone', '$car_number', '$account_no', '$amount', '$country', '$lang')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
