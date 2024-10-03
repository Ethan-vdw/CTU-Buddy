<?php
// download.php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctu-buddy";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the list of uploaded files from the database
$sql = "SELECT * FROM uploaded_files";
$result = mysqli_query($conn, $sql);

// Create a table to display the files
echo "<table>";
echo "<tr><th>File Name</th><th>Download</th></tr>";

while ($file = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $file['filename'] . "</td>";
    echo "<td><a href='downloads.php?file_id=" . $file['id'] . "'>Download</a></td>";
    echo "</tr>";
}

echo "</table>";

// Add a button to redirect back to Share Resources page
echo "<button onclick=\"location.href='Resoures.php'\">Back to Share Resources</button>";
// Download file logic
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
    $sql = "SELECT * FROM uploaded_files WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $file = mysqli_fetch_assoc($result);

    $filepath = 'upload/' . $file['filename'];
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    }
}

// Close the connection
$conn->close();

?>