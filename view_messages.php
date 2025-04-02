<?php
include 'db_connect.php'; // Include database connection

echo "<h2>Contact Messages</h2>";

$sql = "SELECT * FROM contact_messages ORDER BY submitted_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Name:</strong> " . $row['name'] . "<br>";
        echo "<strong>Email:</strong> " . $row['email'] . "<br>";
        echo "<strong>Message:</strong> " . $row['message'] . "<br>";
        echo "<strong>Submitted At:</strong> " . $row['submitted_at'] . "</p><hr>";
    }
} else {
    echo "No messages found.";
}
?>
