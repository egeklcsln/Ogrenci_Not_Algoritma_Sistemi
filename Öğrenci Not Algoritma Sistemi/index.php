<!DOCTYPE html>
<html>
<head>
    <title>Öğrenci Not Tahmin Sistemi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Öğrenci Not Tahmin Sistemi</h1>
        <form action="predict.php" method="post">
            <label for="name">Adı:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="age">Yaşı:</label>
            <input type="number" id="age" name="age" required><br>
            <label for="grade">Notu:</label>
            <input type="number" step="0.01" id="grade" name="grade" required><br>
            <input type="submit" value="Tahmin Et">
        </form>
    </div>
</body>
</html>
