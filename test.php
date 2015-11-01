<?php
	require 'langSelect.php';
	$a1=array('zh','zh-cn','en-US');
	$a2=array('fr');
	
	$a1Pref=getLang($a1);
	$a2Pref=getLang($a2);
?>


<html>
<head>
	<meta charset="utf-8">
	<title>LangSelect Test</title>
</head>
<body>
	<h1>LangSelect Test</h1>
	<p><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></p>
	<p>parsed: <?php print_r(parseLang($_SERVER['HTTP_ACCEPT_LANGUAGE']));?></p>
	<p>$a1: <?php print_r($a1);?></p>
	<p>$a1 Pref: <?php echo $a1Pref;?></p>
	<p>$a2: <?php print_r($a2);?></p>
	<p>$a2 Pref: <?php echo $a2Pref;?></p>	
</body>
</html>