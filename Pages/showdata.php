<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve data from the insurance_form table
$sql = "SELECT * FROM flood_insurance";


$result = mysqli_query($conn, $sql);

// Check if there are any rows in the result set
if (mysqli_num_rows($result) > 0) {
  // Loop through the result set and output the data
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["name"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Phone: " . $row["phone"] . "<br>";
    echo "Date of Birth: " . $row["dob"] . "<br>";
    echo "Gender: " . $row["gender"] . "<br>";
    echo "Amount of Coverage: " . $row["coverage"] . "<br>";
    echo "Term Length: " . $row["term"] . "<br>";
    echo "Smoker: " . $row["smoker"] . "<br>";
    echo "Medical Conditions: " . $row["conditions"] . "<br>";
    echo "Condition Description: " . $row["condition_description"] . "<br>";
    echo "<hr>";
  }
} else {
  echo "No results found.";
}

// Close the connection
mysqli_close($conn);
?>
