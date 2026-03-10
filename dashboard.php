<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | QuickBite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>🍽️ QuickBite</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>

        <main>
            <div class="dashboard">
                <h2>👋 Welcome, <?= htmlspecialchars($_SESSION['user_email']) ?></h2>
                <p>Manage your orders and preferences here.</p>

                <div class="actions">
                    <!-- Menu dropdown (no JavaScript) -->
                    <div class="dropdown">
                        <a href="#" class="btn dropdown-btn">Browse Menu</a>
                        <div class="dropdown-content">
                            <a href="#">Jollof Rice – 25.00</a>
                            <a href="#">Fried Rice – 22.00</a>
                            <a href="#">Grilled Chicken – 40.00</a>
                            <a href="#">Banku with Tilapia – 35.00</a>
                            <a href="#">Waakye – 18.00</a>
                        </div>
                    </div>

                    <a href="#" class="btn">View Orders</a>
                    <a href="#" class="btn">Edit Profile</a>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
