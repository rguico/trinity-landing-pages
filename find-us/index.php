<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<!-- https://matthewjamestaylor.com/holy-grail-layout -->
<div class="holy-grail-flexbox">
    <?php require_once("../includes/header.php"); ?>
    <pre-footer style="margin-top: 0;">
        <h1>How to Get Here</h1>
        <img 
            src="../img/roselle-area.png" 
            alt="A map of Trinity Lutheran School in the context of Roselle." 
            style="max-width: 600px;">
        <?php require_once("../includes/address.php"); ?>
    </pre-footer>

    <footer class="footer">
        <?php require_once("../includes/footer.php"); ?>
    </footer>
</div>
</html>
