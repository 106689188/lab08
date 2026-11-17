<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }

    $page_title = "Welcome";
    include 'header.inc';
?>
    <main>
        <h2>Welcome</h2>
        <p>Welcome, <?php echo $_SESSION['user']; ?>! You are now logged in.</p>
        <p>Your token from the hidden field is: <?php echo $_SESSION['token']; ?></p>
    </main>
<?php include 'footer.inc'; ?>
