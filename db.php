<?php
$servername = "localhost";
$username = "root"; // Podrazumevani korisnik na XAMPP-u
$password = ""; // Bez lozinke na XAMPP-u
$dbname = "test_db"; // Ime tvoje baze podataka

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
