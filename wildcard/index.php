<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS Tunnel Audit</title>
    <link rel="stylesheet" href="https://swgaudit.com/globals.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include '../snippets/header.php' ?>
    <main>
        <!-- Show the URL in a HTML Page -->
        <p>Your current URL is: <span id="url"></span></p>
        <script>
            document.getElementById('url').textContent = window.location.href;
        </script>
    </main>
    <?php include '../snippets/footer.php' ?>
</body>
</html>