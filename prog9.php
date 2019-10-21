<?php
$allTheStates= "Mississippi Alabama Texas Massachussets Kansas";
$statesArray = [];
$states = explode(' ',$allTheStates);
$i=0;

//states that ends in xas

foreach($states as $state){
	if(preg_match('/xas$/',($state))){
		$statesArray[$i] = ($state);
		$i=$i+1;
		print "The states that ends in xas:".$state."<br/>";
	}
}

//states that begin with k and ends with s

foreach($states as $state){
	if(preg_match('/^k.*s$/i',($state))){
		$statesArray[$i] = ($state);
		$i=$i+1;
		print "The states that begins with k ends in s:".$state."<br/>";
	}
}

//states that begin with M and ends in S

foreach($states as $state){
	if(preg_match('/^M.*s$/',($state))){
		$statesArray[$i] = ($state);
		$i=$i+1;
		print "The states that begins with M and ends in s:".$state."<br/>";
	} 
}

//states that ends in a

foreach($states as $state){
	if(preg_match('/a$/',($state))){
		$statesArray[$i] = ($state);
		$i=$i+1;
		print "The states that ends with a:".$state."<br/>";
	}
}

foreach($statesArray as $element =>$value)
{
	print("\n".$value." is the element ".$element."<br/>");
}
?>
