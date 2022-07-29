<?php

	$field_check_email = $_POST['check_email'];
	$field_email = $_POST['email'];

	if((isset($_POST["check_email"]) && (strlen($_POST["check_email"]) > 0)) && (isset($_POST["email"]) && (strlen($_POST["email"]) > 0)))
	{
		?>
		<script language="javascript" type="text/javascript">
			alert('Krivo uneseni podaci');
			window.location = 'index.html';
		</script>
		<?php
	} else {

		$field_name = $_POST['name'];
		$field_telefon = $_POST['phone'];
		$field_company = $_POST['company'];
		$field_sender = $_POST['sender'];
		$field_message = $_POST['message'];

	if

	(
		isset($_POST["name"]) && (strlen($_POST["name"]) > 0)
		&& isset($_POST["phone"])  && (strlen($_POST["phone"]) > 0)
		&& isset($_POST["sender"])  && (strlen($_POST["sender"]) > 0)
		&& isset($_POST["message"])  && (strlen($_POST["message"]) > 0)
	)

		{

			$mail_to = 'uprava@asseriacentar.eu';
			$subject = 'Nova poruka od '.$field_name;
			$body_message = 'Poruku poslao: '.$field_name."\n";
			$body_message .= 'E-mail: '.$field_sender."\n";
			$body_message .= 'Tvrtka: '.$field_company."\n";
			$body_message .= 'Telefon: '.$field_telefon."\n";
			$body_message .= 'Poruka: '.$field_message;

			$headers = 'From: '.$field_sender."\r\n";
			$headers .= 'Reply-To: '.$field_sender."\r\n";

			$mail_status = mail($mail_to, $subject, $body_message, $headers);
		}

	else {
		?>

		<script language="javascript" type="text/javascript">
			alert('Poruka nije poslana, molimo ispunite sva potrebna polja');
			window.location = '/';
		</script>
	<?php
	}
}

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Message sent');
		window.location = '/';
	</script>
<?php
}
 ?>
