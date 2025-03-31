<?php echo '
<html>
<head>
    <title>Login - HIVE CONSULT</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="background-image">
            <img src="images/image3.jpg" alt="Background">
        </div>
        <div class="form-box">
            <h1>Login to HIVE CONSULT HOSPITAL</h1>
            <form action="dashboard.php" method="POST">
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
    </div>
</body>
</html>';
?>
