<?php
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database = "trip";

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check for connection success
if (!$conn) {
    die("Connection to this database failed due to " . mysqli_connect_error());
}
echo "Success connecting to the db <br>";

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect post variables
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Others = $_POST['Others'];

    // Debug: Print received data
    print_r($Name);
    print_r($Age);
    print_r($Gender);
    print_r($Email);
    print_r($Phone);
    print_r($Others);

    // Insert data into database
    $sql = "INSERT INTO `trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Others`) VALUES ('$Name', '$Age', '$Gender', '$Email', '$Phone', '$Others');";
    
    if (mysqli_query($conn, $sql)) {
        echo "✅ Successfully inserted";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>

<!-- 
Form URL: http://localhost:8080/crude/index.php
PhpMyAdmin URL: http://localhost:8080/phpmyadmin/index.php?route=/sql&db=trip&table=trip&pos=0
-->
