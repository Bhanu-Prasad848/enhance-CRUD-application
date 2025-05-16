<?php
include 'db.php';
$id = $_GET['id'] ?? 0;
$sql = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($sql);
$post = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($post['title']) ?></title>
</head>
<body>
    <h2><?= htmlspecialchars($post['title']) ?></h2>
    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
    <a href="index.php">Back</a>
</body>
</html>
