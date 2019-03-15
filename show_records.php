<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection with server
$conn = new mysqli($servername, $username, $password);
// Check connection and end it if none is established.
if ($conn->connect_error) {
    die("Connection has failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Films.Films";
$result = $conn->query($sql);
if ($result->rows_num > 0) {
    // This will output the data of each rows.
            echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Director</th>";
                echo "<th>Date</th>";
            echo "</tr>";
    while($row = $result->fetch_assoc()) {
          echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Director'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
            echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>