<?php
$servername = "localhost";
$username = "root";
$password = "12345678";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$nama 	= $_GET["contactName"]
$email 	= $_GET["contactEmail"]
$subj 	= $_GET["contactSubject"]
$pesan 	= $_GET["contactMessage"]

$sql = "INSERT INTO pesan_masuk (nama, email, subj, pesan, time)
VALUES ('$nama', '$email','$subj','$pesan', time()";

if ($conn->query($sql) === TRUE) {
    echo "Pesan Telah Terkirim";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="index.php">kembali</a>	