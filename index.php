<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Then-Else Example</title>
</head>
<body>
<?php
    // PHP code for conditional logic
    $condition = true; // Change this to true or false to see different outcomes

    if ($condition) {
        echo "<p>This is the 'if' branch.</p>";
    } else {
        echo "<p>This is the 'else' branch.</p>";
    }

    // You can also include more HTML outside the if-else block
    echo "<p>This is some HTML outside the if-else block.</p>";
?>
<a href="login.php">Login</a>
<span class="error">
<?php
    // PHP code for conditional logic
    session_start();
    if (isset($_SESSION['User'])) {
        echo $_SESSION['User']; 
    }
    else{
        echo "No user found :((";
    }
?>
</span>

</body>
</html>