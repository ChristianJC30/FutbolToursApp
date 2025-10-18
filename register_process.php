<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $consentimiento = isset($_POST["consentimiento"]) ? 1 : 0;

    if ($consentimiento == 0) {
        header("Location: ../frontend/register.html?error=consentimiento");
        exit;
    }

    $sql = "INSERT INTO usuarios (nombre, email, password, consentimiento) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nombre, $email, $password, $consentimiento);

    if ($stmt->execute()) {
        header("Location: ../frontend/login.html?success=registro");
    } else {
        header("Location: ../frontend/register.html?error=existe");
    }

    $stmt->close();
}
?>
