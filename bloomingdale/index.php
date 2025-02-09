<!DOCTYPE html>

<html>
<?php require_once("../includes/html-header.php"); ?>

<!-- https://matthewjamestaylor.com/holy-grail-layout -->
<div class="holy-grail-flexbox">
    <?php require_once("../includes/header.php"); ?>
    <main class="main-content">
        <h1>Quality Christian Education</h1>
        <h2>is less than <strong>12</strong> minutes away</h2>
        <p>Trinity Lutheran School is conveniently located 1/2 mile south of downtown Roselle, just off Roselle Road. Trinity is the <em>only</em> Protestant private school in the Roselle-Bloomingdale area.</p>
        <p>You do <em>not</em> need to be Lutheran or a member at Trinity Lutheran Church in order for your kids to attend the school.</p>
        <p><strong>Let us show you the difference in person.</strong> Fill out and submit the form, and we'll send you more information about our faith, activities, and curriculum.</p>
    </main>
    
    <?php require_once("../ac/form_integration.html"); ?>

    <pre-footer>
        <h2>How to Get Here</h2>
        <?php require_once("../includes/address.php"); ?>
        <img 
            src="../img/bloomingdale-to-trinity.png" 
            alt="A map of the broader Bloomingdale area with respect to Roselle." 
            style="max-width: 600px;">
        <h2>Hear what Trinity's Girls Varsity Volleyball Team has to say:</h2>
        <?php require_once("../yt/volleyball.html"); ?>
    </pre-footer>

    <footer class="footer">
        <?php require_once("../includes/footer.php"); ?>
    </footer>
</div>
</html>
