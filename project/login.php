<?php
session_start();
$message = "";

if ($_POST) {
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $message = "Email and password are required.";
    } else {
        // Dummy login (no DB)
        if ($email === 'user@example.com' && $password === '123456') {
            $_SESSION['logged_in']  = true;
            $_SESSION['user_email'] = $email;

            header("Location: dashboard.php");
            exit;
        } else {
            $message = "Invalid email or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login | QuickBite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>🍽️ QuickBite</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="register.php">Register</a>
            </nav>
        </header>

        <main>
            <div class="form-box">
                <h2>🔑 Log In</h2>

                <?php if ($message): ?>
                    <p class="error"><?= htmlspecialchars($message) ?></p>
                <?php endif; ?>

                <form method="post" action="login.php">
                    <label>Email</label>
                    <input type="email" name="email" required>

                    <label>Password</label>
                    <input type="password" name="password" required>

                    <button type="submit" class="btn">Log In</button>
                </form>

                <p>Don’t have an account? <a href="register.php">Create one</a></p>
            </div>
        </main>
    </div>
</body>
</html>
