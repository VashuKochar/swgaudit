<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test your Secure Web Gateway's ability to detect and block data exfiltration via DNS tunneling.">
    <meta name="keywords" content="SWG, Data Theft Test, DNS Tunneling, Secure Web Gateway, Cybersecurity">
    <meta name="author" content="SWG Audit">
    <meta property="og:title" content="Data Theft Audit - SWG Testing Suite">
    <meta property="og:description" content="Evaluate your SWG's effectiveness against data exfiltration with our comprehensive testing tools.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://data-theft.swgaudit.com">
    <link rel="icon" href="https://swgaudit.com/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="https://swgaudit.com/apple-touch-icon.png">
    <meta property="og:image" content="https://data-theft.swgaudit.com/opengraph.png">
    <title>Data Exfiltration Test - SWG Audit</title>
    <link rel="stylesheet" href="https://swgaudit.com/globals.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include '../snippets/header.php' ?>
    <main>
    <h1>Can Your SWG stop Data Exfiltration?</h1>
    <div class="container">
        <form id="data-theft-form" method="post">
            <h2>Unauthorised File Upload Simulation</h2>
            <div class="upload-area" id="upload-area">
                <svg class="upload-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/>
                </svg>
                <p class="upload-text">Drag and drop or click to upload a file</p>
                <p class="constraints">Maximum file size: 100 KB</p>
            </div>
            <input type="file" id="fileUpload" hidden>
        </form>
        <div class="failure-container hidden" id="failure-container">
            <h2>SWG FAILED</h2>
            <p class="note">File uploaded to the server</p>
            <div class="button-container">
                <button id="download-button" class="">
                    Download File
                </button>
                <br>
                <button id="copy-button" class="">
                    Copy Download Link
                </button>
            </div>
            <br>
            <button type="button" id="reset-button">Reset Test</button>
        </div>
        <p id="timer" class="timer">File will be deleted from the server in 10 minutes</p>
    </div>
    </main>
    <?php include '../snippets/footer.php' ?>
    <script src="https://swgaudit.com/global.js"></script>
    <script src="base32.js"></script>
    <script src="script.js"></script>
</body>
</html>