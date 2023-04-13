<?php
	include ('shared.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Alexus Hair Designs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <?php print $navbar?>
        <div class="wrapper">
        <main>
            <div class="cta">
                <div class="cta-text col-lg-6">
                <div class="slogan">
                <h2>Get great hair without leaving your home.</h2>
                <p>Sign up now for our mobile salon to visit you!</p> 
                </div>
                <button class="cta-button"><a href="booking.php" title="Book Appointment">BOOK APPOINTMENT</a></button>
                </div>
                <div class="img-holder col-lg-6">
                <img class="cta-img" src="cta-img.jpg" alt="Alexus Hair Designs Image">
                </div>
            </div>
        </main>
        </div>
    <?php print $footer?>

    <script src="app.js"></script>
</body>
</html>



