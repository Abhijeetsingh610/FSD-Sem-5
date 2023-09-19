<?php
// Database Connection
$servername = "127.0.0.1";
$username = "Abhi";
$password = "root@123";
$dbname = "MyDb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert Student Details
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $rollNo = $_POST['rollNo'];
    $password = $_POST['password'];
    $contactNumber = $_POST['contactNumber'];

    // SQL Query to insert data
    $sql = "INSERT INTO students (first_name, last_name, roll_no, password, contact_number)
            VALUES ('$firstName', '$lastName', '$rollNo', '$password', '$contactNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete Student Records
if (isset($_GET['delete'])) {
    $rollNo = $_GET['delete'];

    // SQL Query to delete data
    $sql = "DELETE FROM students WHERE roll_no='$rollNo'";

    if ($conn->query($sql) === TRUE) {
        echo "Student record deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Update Student Details
if (isset($_POST['update'])) {
    $rollNo = $_POST['rollNo'];
    $contactNumber = $_POST['contactNumber'];

    // SQL Query to update data
    $sql = "UPDATE students SET contact_number='$contactNumber' WHERE roll_no='$rollNo'";

    if ($conn->query($sql) === TRUE) {
        echo "Student details updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Display Updated Student Details
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Roll No/ID</th><th>Contact Number</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['roll_no'] . "</td>";
        echo "<td>" . $row['contact_number'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
