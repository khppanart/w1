<?php
$servername = "localhost";
$username = "root"; 
$password = ""; //ใน xampp ไม่ต้องระบุ password
$dbname = "w1"; //ก ำหนดชื่อฐำนข้อมูล
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>