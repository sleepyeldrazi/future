<?php
	ini_set("default_charset", 'utf-8');
	$user = $_REQUEST['username'];
	$first = $_REQUEST['inputFirst'];
	$last = $_REQUEST['inputLast'];
	$email = $_REQUEST['inputEmail'];
	$pass = $_REQUEST['inputPassword'];
	$city = $_REQUEST['inputCity'];
	$student= $_REQUEST['student'];


	$conn = mysqli_connect("pdb3.awardspace.net", "2287883_future", "konik1998", "2287883_future") or die(mysql_error());
	mysqli_set_charset($conn,"utf8");

	$name = $first." ".$last;
	$result = mysqli_query($conn, "insert INTO  student (`user`, `name`, `uni`,`city`, `isstudent`, `subj`, `year`, `bio`, `ask`, `pass`, `email`) VALUES (\"$user\",\"$name\",\"\",\"$city\",$student,\"\",0,\"\",0,\"$pass\",\"$email\");");
	echo "<html><head><meta http-equiv=\"refresh\" content=\"0; url=http://knikolov.eu/future\" /></head><body><script>alert(\"Thank you for registering!\")</script></body></html>";

?>