<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user'];
} else {
    header('Location: login.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Lab08</title>
</head>
<body>
    <h2>Welcome Page</h2>

    <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>

    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>

    <footer>
        <p>&copy; 2025 Shuhuan Gao - Lab08 Exercise</p>
    </footer>
</body>
</html>