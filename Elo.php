<?php
// Połączenie z bazą danych
$servername = "localhost";
$username = "nazwa_uzytkownika";
$password = "haslo";
$database = "nazwa_bazy_danych";

$conn = new mysqli($servername, $username, $password, $database);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

// Pobranie współrzędnych z zapytania POST
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Zabezpieczenie przed atakami SQL injection
$latitude = mysqli_real_escape_string($conn, $latitude);
$longitude = mysqli_real_escape_string($conn, $longitude);

// Zapytanie SQL do wstawienia danych do bazy
$sql = "INSERT INTO coordinates (latitude, longitude) VALUES ('$latitude', '$longitude')";

if ($conn->query($sql) === TRUE) {
    echo "Współrzędne zostały pomyślnie dodane do bazy danych.";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}

// Zamknięcie połączenia z bazą danych
$conn->close();
?>
