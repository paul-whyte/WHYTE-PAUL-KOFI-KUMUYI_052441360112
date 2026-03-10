<?php
session_start();
$message = "";

if ($_POST) {
    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($name) || empty($email) || empty($password)) {
        $message = "All fields are required.";
    } else {
        $_SESSION['logged_in']  = true;
        $_SESSION['user_name']  = $name;
        $_SESSION['user_email'] = $email;

        header("Location: dashboard.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register | QuickBite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>🍽️ QuickBite</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="login.php">Login</a>
            </nav>
        </header>

        <main>
            <div class="form-box">
                <h2>📝 Create Account</h2>

                <?php if ($message): ?>
                    <p class="error"><?= htmlspecialchars($message) ?></p>
                <?php endif; ?>

                <form method="post" action="register.php">
                    <label>Name</label>
                    <input type="text" name="name" required>

                    <label>Email</label>
                    <input type="email" name="email" required>

                    <label>Password</label>
                    <input type="password" name="password" required>

                    <button type="submit" class="btn">Register</button>
                </form>

                <p>Already have an account? <a href="login.php">Log in</a></p>
            </div>
        </main>
    </div>
</body>
</html>
