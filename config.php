<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_admin');

if ($conn->connect_errno) {
    echo "Error: " . $conn->connect_error;
}