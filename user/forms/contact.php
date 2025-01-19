<?php
include '../../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Validasi input (opsional)
  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
      echo "<script>alert('Semua kolom harus diisi.'); window.history.back();</script>";
      exit();
  }

  // Query untuk menyimpan pesan ke database
  $sql = "INSERT INTO user_feedback (name, email, subject, message) VALUES (?, ?, ?, ?)";
  $stmt = $connect->prepare($sql);

  if ($stmt) {
      $stmt->bind_param("ssss", $name, $email, $subject, $message);

      if ($stmt->execute()) {
          echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='add_message.php';</script>";
      } else {
          echo "<script>alert('Gagal mengirim pesan: " . $stmt->error . "'); window.history.back();</script>";
      }

      $stmt->close();
  } else {
      echo "<script>alert('Gagal mempersiapkan pernyataan SQL.'); window.history.back();</script>";
  }

  $connect->close();
}
?>