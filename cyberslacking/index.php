<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test your Secure Web Gateway's ability to enforce acceptable use policies and block non-work-related content.">
    <meta name="keywords" content="SWG, Cyber-Slacking Test, Content Filtering, Secure Web Gateway, Cybersecurity">
    <meta name="author" content="SWG Audit">
    <meta property="og:title" content="Cyber-Slacking Audit - SWG Testing Suite">
    <meta property="og:description" content="Evaluate your SWG's effectiveness against productivity loss with our comprehensive testing tools.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cyberslacking.swgaudit.com">
    <link rel="icon" href="https://swgaudit.com/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://swgaudit.com/apple-touch-icon.png">
    <meta property="og:image" content="https://cyberslacking.swgaudit.com/opengraph.png">
    <title>Cyber-Slacking Audit</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://swgaudit.com/globals.css">
</head>
<body>
    <?php include '../snippets/header.php' ?>
    <main>
    <h1>Can Your SWG curb Cyber-Slacking on Web 2.0 Apps?</h1>
    <div class="container">
        <form id="cyberslacking-form">
            <h2>Video Content Category Simulation</h2>
            <div class="form-group">
                <label for="category-select">Select a YouTube Category</label>
                <select id="category-select" class="category-select">
                    <!-- Options will be generated here -->
                </select>
            </div>
            <div class="video-container">
                <iframe id="youtube-frame" 
                        width="760" 
                        height="415" 
                        src=""
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
        </form>
    </div>
    </main>
    <?php include '../snippets/footer.php' ?>
    <script src="https://swgaudit.com/global.js"></script>
    <script src="script.js"></script>
</body>
</html>