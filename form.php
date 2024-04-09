<?php
$servername = "localhost:1234";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<!DOCTYPE html>
<html>
<body>

    <form action="register.php" method="post" >
        
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="lname">last name:</label>
            <input type="text" name="lname" id="lname">
        </div>
        
        <button type="submit">submit</button>
    </form>
</body>
</html>
