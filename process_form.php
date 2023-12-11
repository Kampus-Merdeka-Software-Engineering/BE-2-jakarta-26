<!-- process_form.php -->
<?php
// Koneksi ke database
$servername = "127.0.0.1";
$username = "root";
$password = "12345678";
$dbname = "news_portal";

$conn = new mysqli("127.0.0.1", "root", "12345678", "news_portal");

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Simpan data ke dalam tabel contact_us
$sql = "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>