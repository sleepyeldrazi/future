<?php
	$uniName = $_REQUEST['name'];
	$html_template= implode("", file("unilist.html"));
	$conn = mysqli_connect("pdb3.awardspace.net", "2287883_future", "konik1998", "2287883_future") or die(mysql_error());
$conn->set_charset("utf8");

	$result = mysqli_query($conn, "select * from uni where uniName=\"$uniName\"");

	while($row = mysqli_fetch_assoc($result)) {
		$html_template = str_replace('(name)', $row["name"], $html_template);
        $html_template = str_replace('(city)', $row["city"], $html_template);
		$html_template = str_replace('(shortd)', $row["shortd"], $html_template);
    }	

	echo $html_template;
?>