<?php
session_start();
session_unset(); 
session_destroy(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
</head>
<body>
    <script>
        window.onload = function() {
            alert("Successfully logged out!");
            window.location.href = "index.php"; 
        };
    </script>
</body>
</html>
