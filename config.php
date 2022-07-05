<?php
// connection to database
$conn = new mysqli('localhost', 'root', '', 'penzi');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
