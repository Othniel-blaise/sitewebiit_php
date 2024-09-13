<?php
session_start();
include "config.php";

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        header("Location: test.html?error=User Name is required");
        exit();
    } else if (empty($password)) {
        header("Location: test.html?error=password is required");
        exit();
    }

    // Insérer des données dans la base de données
    $req = mysqli_query($conn, "INSERT INTO teams (username, password) VALUES ('$username', '$password')");

    if ($req) {
        echo "BaBy";
    } else {
        echo "echec";
    }
} else {
    echo "Les données du formulaire ne sont pas définies.";
}
?>
