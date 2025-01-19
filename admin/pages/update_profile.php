<?php
session_start();
include '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($password)) {
        // Hash password jika diubah
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param('sssi', $username, $email, $hashedPassword, $id);
    } else {
        // Update tanpa mengubah password
        $sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param('ssi', $username, $email, $id);
    }

    if ($stmt->execute()) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header('Location: pesaan.php?status=success');
    } else {
        header('Location: pesaan.php?status=error');
    }
    $stmt->close();
    $connect->close();
}
