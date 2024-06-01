<?php
// Define database connection variables
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $coverage = $_POST["coverage"];
    $term = $_POST["term"];
    $smoker = $_POST["smoker"];
    $conditions = $_POST["conditions"];
    $condition_description = $_POST["condition_description"];
    
    $sql = "INSERT INTO flood_insurance (name, email, phone, dob, gender, coverage, term, smoker, conditions, condition_description) 
            VALUES ('$name', '$email', '$phone', '$dob', '$gender', '$coverage', '$term', '$smoker', '$conditions', '$condition_description')";
    
    if (mysqli_query($conn, $sql)) {
        echo " <h2>Data inserted successfully.<h2>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close database connection
    mysqli_close($conn);
}
?>
