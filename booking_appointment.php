<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $conn->query($sql);


if(isset($_POST["submit"])){
    
// Get the values from the form
$Username = $_POST["FirstName"];
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];
$type = $_POST["type"];

echo  " <p>Name: $Username</p>";
echo   "<p>Email: $email</p>";
echo   " <p>Date: $date</p>";
echo   " <p>Time: $time</p>";
echo  " <p>Type: $type</p>" ;

// Prepare and bind the SQL statement
$sql = "INSERT INTO `appointment` (`id`, `name`, `email`, `date`, `time`, `type`) VALUES (NULL,?, ?, ?, ?, ?);";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $Username, $email, $date, $time, $type);

// Execute the statement
$stmt->execute();

// Close the statement and connection
$stmt->close();
}
$conn->close();

?>
<?php echo "Booking successful "?>
