<?php
// This onnects to my MYSQL Server.
$link = mysqli_connect("localhost", "root", "root", "demo");
 
 // This checks if the connection is established.
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // This will insert a new query into the database.
$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//This will end the connection.
mysqli_close($link);
?>
