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
<br> 
<div class=wrapper> 
<form action= "post.php" method="post">
<h2> Schedule an appointment below.</h2><br/>

    Name* : <input type="text" name="name"><br/>
    <br/>  
    Email*: <input type="text" name="email"><br/>
    <br/>
    Service*:
    <select name="service">
    <option value="Color/Highlights">Color/Highlights</option>
    <option value="Hair Cut">Hair Cut</option>
    <option value="Styling">Styling</option></select>
    <br/>
    <br/>
    Comment: <br/><textarea name="comment" rows="5" cols="40"></textarea><br>
    <input class="booking-button" type="Submit" name="SubmitThis" value="Preview">
</form>
<?php print $footer ?>
</div>
</body>
</html> 
