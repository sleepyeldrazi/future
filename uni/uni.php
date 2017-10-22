<?php
	ini_set("default_charset", 'utf-8');
	
	$name = $_REQUEST['name'];
	$html_template= implode("", file("uni.html"));
	$conn = mysqli_connect("pdb3.awardspace.net", "2287883_future", "konik1998", "2287883_future") or die(mysql_error());
	$conn->set_charset("utf8");
/* change character set to utf8 */



	$result = mysqli_query($conn, "select * from uni where id=\"$name\"");

	while($row = mysqli_fetch_assoc($result)) {
		$html_template = str_replace('(name)', $row["name"], $html_template);
        $html_template = str_replace('(city)', $row["city"], $html_template);
		$html_template = str_replace('(longd)', $row["longd"], $html_template);
		if($row["id"] == "sofuni"){
			$html_template = str_replace('(subj1)', "Компютърни науки", $html_template);
			$html_template = str_replace('(subj2)', "Психология", $html_template);
			$html_template = str_replace('(subj3)', "Английска филология", $html_template);
			$html_template = str_replace('(img)', "../img/logo_sof.png", $html_template);
			$html_template = str_replace('(size)', "margin-top: -100px;width: 200px; height: 200px", $html_template);
		}
		else if($row["id"] == "morsko"){
			$html_template = str_replace('(subj1)', "Корабоводене", $html_template);
			$html_template = str_replace('(subj2)', "Електрообзавеждане на кораба", $html_template);
			$html_template = str_replace('(subj3)', "Корабни машини и механизни", $html_template);
			$html_template = str_replace('(img)', "../img/logo_morsko.png", $html_template);
			$html_template = str_replace('(size)', "margin-top: -50px;width: 250px;", $html_template);
		}
		else if($row["id"] == "medivar"){
			$html_template = str_replace('(subj1)', "Медицина", $html_template);
			$html_template = str_replace('(subj2)', "Дентална медицина", $html_template);
			$html_template = str_replace('(subj3)', "Фармация", $html_template);
			$html_template = str_replace('(img)', "../img/logo_med.png", $html_template);
			$html_template = str_replace('(size)', "margin-top: -100px;width: 150px; height: 150px", $html_template);
		}
		else if($row["id"] == "newsof"){
			$html_template = str_replace('(subj1)', "Право", $html_template);
			$html_template = str_replace('(subj2)', "Информатика и информационни технологии", $html_template);
			$html_template = str_replace('(subj3)', "Графичен дизайн", $html_template);
			$html_template = str_replace('(img)', "../img/logo_nov.png", $html_template);
			$html_template = str_replace('(size)', "margin-top: -100px;", $html_template);
		}
    }	


	echo $html_template;
?>