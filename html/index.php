<?php
echo '<h1>Your Vagrant & Ansible setup works a charm!</h1>';

$mysqli = new mysqli('localhost', 'root', '', 'ashsmith_example');

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// Test fetching data from our database...
$result = $mysqli->query('SELECT * FROM pet');

$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<pre>";
var_dump($row);
echo "</pre>";


// Test file perms.
if(file_put_contents("text.txt", "Hello World")) {
    echo "Can write to file...";
}
?>