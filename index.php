<html>
<h1>TESTER 1</h1>
<div class="pembungkus">
<?php
$servername = "necam199.heliohost.org:3306";
$username = "necam199";
$password = "Necam199!";
$dbName = "necam199_Coba1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    $sql = "SELECT nama, gender FROM Tester1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class = 'orang'>";
            echo "<div class = 'nama'> nama: <a id='nama'>". $row["nama"] ."</a></div>";
            echo "<div class = 'gender'> gender: <a id='gender'>". $row["gender"] ."</a></div> <br><br>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
}



$conn->close();
?>


</div>
</html>
