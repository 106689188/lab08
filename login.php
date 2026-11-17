<?php
    $page_title = "Login";
    include 'header.inc';
?>
    <main>
        <h2>Login</h2>
<?php
    if (isset($_GET['error'])) {
        echo "        <p>Invalid username or password. Please try again.</p>\n";
    }
?>
        <form method="post" action="process.php">
            <p>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </p>
            <input type="hidden" name="token" value="H106689188">
            <p>
                <input type="submit" value="Login">
            </p>
        </form>
    </main>
<?php include 'footer.inc'; ?>
