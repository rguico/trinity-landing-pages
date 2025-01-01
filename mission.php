<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<!-- https://matthewjamestaylor.com/holy-grail-layout -->
<div class="holy-grail-flexbox">
    <header class="header"><img src="img/trinity-logo.png" alt="Trinity Logo" height="125px"></header>
    <main class="main-content">
        <h1>Quality Christian Education</h1>
        <h2>is only <strong>9</strong> minutes away</h2>
        <p>Trinity Lutheran School is conveniently located 1/2 mile south of downtown Roselle, just off Roselle Road. Trinity is the <em>only</em> Protestant private school in the Roselle-Bloomingdale area.</p>
        <p>Don't worry; you do <em>not</em> need to be Lutheran or a member at Trinity Lutheran Church in order for your kids to attend the school.</p>
        <p><strong>Let us show you the difference in person.</strong> Fill out and submit the form, and we'll send you more information about our faith, activities, and curriculum.</p>
    </main>
    <section class="left-sidebar"><?php require_once("ac/form_integration.html"); ?></section>
    <aside class="right-sidebar">
        <img src="img/mission-to-trinity.png" alt="A map from Mission Church to Trinity Lutheran School in Roselle.">
        <h2>Hear what Trinity's Girls Varsity Volleyball Team has to say:</h2>
        <?php require_once("yt/volleyball.html"); ?>
    </aside>
    <footer class="footer">
        <?php require_once("includes/footer.php"); ?>
    </footer>
</div>
</html>
