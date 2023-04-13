<?php include ('shared.php') ?>
<?php
if (array_key_exists("SubmitThis", $_POST)) {
    $required = array('name', 'email','service');
	$expected = array('name', 'email','service','comment');
	$missing = array();

	foreach($expected as $thisField) {

        if (is_array($_POST[$thisField])) {
            $thisUserInput = $_POST[$thisField];
        } else {
            $thisUserInput = trim($_POST[$thisField]);
        }

		if (in_array($thisField, $required)) {

			if (empty($thisUserInput)) {
				array_push($missing, $thisField);
			} else {

				${$thisField} = $thisUserInput;
			}
		} else {
			${$thisField} = $thisUserInput;
		}
	
	}
	if (empty($missing)){

		$service = implode(", ", $service); //stuck here


		if (!empty($email)) {
			$name = "<a href='mailto:$email'>$name</a>";
		}

        $output = "<table class = $class border = '1'>\n>
				<tr>
					<th>Name:</th>
					<td> $name</td>
				</tr>\n 
				
				<tr>
					<th>Email:</th>
					<td> $email</td>
				</tr>\n 
				
				<tr>
					<th>Service:</th>
					<td> $service</td>
				</tr>\n 
				<tr>
					<th>Comment:</th>
					<td>$comment</td>
				</tr>\n 
				
                </table>\n";
	
	} else {
		$missingFieldList = implode(", ",$missing);
		$output = "The following required fields are missing. Please go back and fill in the required fields.  Thank you. <br>
						<b>Missing fields: $missingFieldList </b>
					";

	}
    
} else {
	$output = "Please post your message use <a href='index.php'>this form</a>.";
}

?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> Form Submission - Alexus Hair Designs</TITLE>
<link rel="stylesheet" href="styles.css">
</HEAD>

<BODY>
<?php print $navbar ?>
<div class="wrapper">
<h2>Preview Your Message</h2>

<hr size="1">

<p>
	<?php echo $output ?>
</p>

<?php print $footer ?>
</div>
</BODY>
</HTML>
