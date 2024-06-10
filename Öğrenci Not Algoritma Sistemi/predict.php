<?php
include 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];
$grade = $_POST['grade'];

// Veritabanına veri ekleme
$sql = "INSERT INTO students (name, age, grade) VALUES ('$name', $age, $grade)";

if ($conn->query($sql) === TRUE) {
    echo "Yeni kayıt başarılı.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Basit bir lineer regresyon algoritması ile not tahmini
$sql = "SELECT age, grade FROM students";
$result = $conn->query($sql);

$ages = [];
$grades = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ages[] = $row['age'];
        $grades[] = $row['grade'];
    }
}

// Basit lineer regresyon hesaplamaları
$age_mean = array_sum($ages) / count($ages);
$grade_mean = array_sum($grades) / count($grades);

$numer = 0;
$denom = 0;

for ($i = 0; $i < count($ages); $i++) {
    $numer += ($ages[$i] - $age_mean) * ($grades[$i] - $grade_mean);
    $denom += pow($ages[$i] - $age_mean, 2);
}

$slope = $numer / $denom;
$intercept = $grade_mean - ($slope * $age_mean);

// Yeni öğrenci için not tahmini
$predicted_grade = $intercept + ($slope * $age);

echo "<br>Tahmin edilen not: " . $predicted_grade;

$conn->close();
?>
