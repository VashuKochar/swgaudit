<?php
    $title = "Cyber‑Slacking Test - SWG Audit";
    $description = "Evaluate your Secure Web Gateway's ability to enforce acceptable use policies and block non-work-related content.";
    $keywords = "SWG, Cyber‑Slacking Test, Content Filtering, Secure Web Gateway, Cybersecurity";
    $url = "https://cyberslacking.swgaudit.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title><?php echo $title ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ?>" >
    <meta name="keywords" content="<?php echo $keywords ?>" >
    <meta name="author" content="SWG Audit">

    <meta property="og:title" content="<?php echo $title ?>" >
    <meta property="og:description" content="<?php echo $description ?>" >
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $url ?>" >
    <meta property="og:image" content="<?php echo $url ?>/opengraph.png" >
    
    <link rel="icon" href="https://swgaudit.com/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://swgaudit.com/apple-touch-icon.png">
    
    <link rel="stylesheet" href="https://swgaudit.com/globals.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include '../snippets/header.php' ?>
    <main>
    <h1>Can Your SWG curb Cyber‑Slacking on Web 2.0 Apps?</h1>
    <div class="container">
        <form id="cyberslacking-form">
            <h2>Video Content Category Simulation</h2>
            <div class="form-group">
                <label for="category-select">Select YouTube Category</label>
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