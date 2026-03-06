<?php
 session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>QuickBite Food Order</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>🍽️ QuickBite</h1>
            <nav>
                <a href="index.php">Home</a>
                <?php if (isset($_SESSION['logged_in'])): ?>
                    <a href="dashboard.php">Dashboard</a>
                    <a href="logout.php">Logout</a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                <?php endif; ?>
            </nav>
        </header>

        <main>
            <div class="hero">
                <h2>Order Food in Minutes</h2>
                <p>Delicious meals, fast delivery, and easy ordering.</p>
                <h3>Edziban at your doorstep</h3>
                <?php if (!isset($_SESSION['logged_in'])): ?>
                    <a href="register.php" class="btn">Create Account</a>
                <?php endif; ?>
            </div>
        </main>
    </div>
</body>
</html>
