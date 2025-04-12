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
    <header>
        <nav>
            <ul>
                <li><a href="https://swgaudit.com">Home</a></li>
                <li><a href="https://phishing.swgaudit.com">Phishing</a></li>
                <li><a href="https://malware.swgaudit.com">Malware</a></li>
                <li><a href="https://data-theft.swgaudit.com">Data Theft</a></li>
                <li><a href="https://cyberslacking.swgaudit.com">Cyber-Slacking</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Show the URL in a HTML Page -->
        <p>Your current URL is: <span id="url"></span></p>
        <script>
            document.getElementById('url').textContent = window.location.href;
        </script>
    </main>
    <footer>
    <p>Configure your SWG to treat <?php
        $host = $_SERVER['HTTP_HOST']; // Get the host (domain) from the current URL
        echo $host; // Output the domain from the URL
    ?> as an uncategorized domain.</p>
</footer>
\</body>
</html>