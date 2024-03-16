<?php
$filter_date = $_GET['filter_date'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM data";
if (!empty($filter_date)) {
    $sql .= " WHERE date = '$filter_date'";
}

$result = mysqli_query($conn, $sql);

if (!$result) {
  
    die("Query failed: " . mysqli_error($conn));
}

// Display the results
while ($row = mysqli_fetch_assoc($result)) {
   
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Message: " . $row['Message'] . "<br>";
    echo "Date: " . $row['date'] . "<br>";
    echo "------------------------<br>";
}


mysqli_close($conn);
?>  


