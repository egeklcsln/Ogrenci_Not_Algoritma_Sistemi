<?php
$servername = "localhost";
$username = "root";
$password = ""; // Veritabanı şifrenizi buraya yazın
$dbname = "student_grades";

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
