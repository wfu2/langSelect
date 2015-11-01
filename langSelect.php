<?php

/*
	parse HTTP_ACCEPT_LANGUAGE
	array format: language=>q
	sorted by q desc
*/
function parseLang($langString)
{
	$strArr=split(',',$langString);
	
	$result=array();
	
	foreach ($strArr as $lang)
	{
		$str=split(';q=', $lang);
		
		if (isset($str[1]))
			$result[$str[0]]=$str[1];
		else
			$result[$str[0]]=1;
	}
	
	arsort($result);
	return $result;
	
}


/*
	This is for finding the prefered language.
	Retuns "default" if nothing's found.
*/
function getLang($langArr)
{
	$userPref = parseLang($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	
	foreach ($userPref as $userLang=>$val)
	{
		foreach ($langArr as $serverLang)
		{
			if ($userLang==$serverLang)
				return $userLang;
		}
	}
	
	return 'default';
}


