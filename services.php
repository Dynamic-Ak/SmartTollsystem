<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Header -->
<table id="header" width="100%">
    <tr>
        <td>
            <table cellpadding="10" width="90%" align="center">
                <tr>
                    <td><!-- Placeholder for logo --></td>
                    <td><font face="Comic Sans MS" size="6"><b>Toll System</b></font></td>
                    <td width="15%"></td>
                    <td><a href="index.html"><font face="Verdana" size="5">Home</font></a></td><td>|</td>
                    <td><a href="about.html"><font face="Verdana" size="5">About</font></a></td><td>|</td>
                    <td><a href="tollrates.html"><font face="Verdana" size="5">Toll Rates</font></a></td><td>|</td>
                    <td><a href="services.php"><font face="Verdana" size="5" style="color: white;">Services</font></a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- Header end -->

<!-- Main content -->
<div id="services" style="text-align: center; padding: 0; width: 100%; margin: auto;">
    <div style="height: 100px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <font face="Verdana" size="6" color="white">Database Services</font>
        <hr color="yellow" width="20%">
    </div>
</div>

<!-- Display data table -->
<div>
    <table id="table1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Car Number</th>
                <th>Account Number</th>
                <th>Amount</th>
                <th>Country</th>
                <th>Distance</th>
                <th>OBU Connection</th>
                <th>Calculated Toll</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            // PHP code to fetch data from database and display it
            $servername = "localhost";
            $username = "if0_37491980";
            $password = "dynamicak";
            $dbname = "if0_37491980_tollsystem"; //table name:ts1
            $table_name = "ts1"; // Change this to your table name if different

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data from the table
            $sql = "SELECT * FROM $table_name";
            $result = $conn->query($sql);

            // Check if there are any rows in the result
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["username"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["numberplate"] . "</td>
                            <td>" . $row["accountNo"] . "</td>
                            <td>" . $row["wallet"] . "</td>
                            <td>" . $row["country"] . "</td>
                            <td>" . $row["distance"] . "</td>
                            <td>" . $row["obu"] . "</td>
                            <td>" . $row["tollcalc"] . "</td>
                        </tr>";
                }
            } else {
                echo "No data found";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<!-- Footer or closing tags -->

</body>
</html>
