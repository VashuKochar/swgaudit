<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simulate phishing attacks to test your Secure Web Gateway's ability to prevent credential theft.">
    <meta name="keywords" content="SWG, Phishing Test, Credential Theft, Secure Web Gateway, Cybersecurity">
    <meta name="author" content="SWG Audit">
    <meta property="og:title" content="Phishing Audit - SWG Testing Suite">
    <meta property="og:description" content="Evaluate your SWG's effectiveness against phishing attacks with our comprehensive testing tools.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://phishing.swgaudit.com">
    <link rel="icon" href="https://swgaudit.com/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="https://swgaudit.com/apple-touch-icon.png">
    <meta property="og:image" content="https://phishing.swgaudit.com/opengraph.png">
    <title>Phishing Audit</title>
    <link rel="stylesheet" href="https://swgaudit.com/globals.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include '../snippets/header.php' ?>
    <main>
    <h1>Can Your SWG prevent credential theft?</h1>
    <div class="container">
        <form id="phishing-form" method="post">
            <div>
                <h2>Credential Harvesting Simulation</h2>
                <p class="note">Submitted data is immediately discarded</p>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="john.smith" required minlength="1">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="MyP@ssw0rd123" required minlength="1">
            </div>
            <button type="submit" id="submit-button">Submit Credentials</button>
        </form>
        <div class="failure-container hidden" id="failure-container">
            <h2>SWG FAILED</h2>
            <p class="note">Server received your credentials</p>
            <div class="form-group">
                <label>Username</label>
                <div class="credential-value" id="failed-username"></div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="credential-value" id="failed-password"></div>
            </div>
            <button type="button" id="reset-button">Reset Test</button>
        </div>
    </div>
    </main>
    <?php include '../snippets/footer.php' ?>
    <script src="https://swgaudit.com/global.js"></script>
    <script src="script.js"></script>
</body>
</html>