<?php
    header("Content-Type: text/html; charset=iso-8859-1");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
		<link href="xampp.css" rel="stylesheet" type="text/css">
        <link href="img/xampp.ico" rel="shortcut icon" type="image/x-icon">
            <?php echo trim(@file_get_contents('../../install/xampp_modell.txt')); ?>
            <?php echo trim(@file_get_contents('../../install/xampp_version.txt')); ?>
	</head>

	<body class="white" bgcolor="#ffffff">
		<center>
			<img src="img/blank.gif" alt="" height="180" width="1"><br>
			<img src="img/xampp-logo.jpg" alt="">
			<p>
			<a href="/security/lang.php?de">Deutsch</a> /
			<a href="/security/lang.php?en">English</a> /
			<a href="/security/lang.php?es">Spanish</a> /
			<a href="/security/lang.php?fr">Francais</a> /
			<a href="/security/lang.php?it">Italiano</a> /
			<a href="/security/lang.php?nl">Nederlands</a> /
			<a href="/security/lang.php?no">Norsk</a> /
			<a href="/security/lang.php?pl">Polish</a> /
			<a href="/security/lang.php?pt">Portuguese</a> /
			<a href="/security/lang.php?sl">Slovenian</a> /
			<a href="/security/lang.php?zh">Chinese</a>
		</center>
	</body>
</html>
