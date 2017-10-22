<?php
	$user = $_REQUEST['user'];
	$html_template= implode("", file("students.html"));
	$conn = mysqli_connect("pdb3.awardspace.net", "2287883_future", "konik1998", "2287883_future") or die(mysql_error());


	$result = mysqli_query($conn, "select * from student where user=\"$user\"");

	while($row = mysqli_fetch_assoc($result)) {
		$html_template = str_replace('(pic)', $row["pic"], $html_template);
        $html_template = str_replace('(name)', $row["name"], $html_template);
		$html_template = str_replace('(uni)', $row["uni"], $html_template);
		$html_template = str_replace('(subj)', $row["subj"], $html_template);
		$html_template = str_replace('(bio)', $row["bio"], $html_template);
		$html_template = str_replace('(y)', $row["year"], $html_template);
    }	

	echo $html_template;
?>