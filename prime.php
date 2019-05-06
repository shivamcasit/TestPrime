<?php
$number = 0;
$array = array();
/*Print All Prime Numbers*/
function printPrims($array){
	echo "---------------------------------------\n";
	foreach($array as $key => $value)
	{
  		echo $value." ";
	}
	echo "\n";
}
/*Get Table for given number*/
function getTable($number)
{
	for($i=1; $i <= 10; ++$i)
	{
  		echo $number * $i ." ";
	}
}
/*get Prime number for given count*/
function getPrime($pCount)
{
	$count = 0 ;
	$number = 2 ;
	$pNums = array();
	while ($count < $pCount )
	{
		$div_count = 0;
		for ( $i = 1;$i <= $number;$i++)
		{
			if (($number%$i)==0)
			{
				$div_count++;
			}
		}
		if ($div_count<3)
		{
			$pNums[] = $number;
			echo $number."|";
			getTable($number);
			echo "\n";
			$count=$count+1;
		}
		$number=$number+1;
	}
	printPrims($pNums);
}
/*Number of Arguments should be more than 2.*/
if ($argc < 3 )
{
    exit( "Usage: program <parameter1>\n" );
}
$numCount = $argv[2];
/*Check argument is number or not.*/
if(is_numeric($numCount)){
	getPrime($numCount);
}else{
	 exit( "Argument is Not Integer !!! ($numCount)\n" );
}
/*Unit Test Cases
 * 1. Argument counts
 * 2. 2nd Argument should be numeric
 * 3. Get table for given number
 * 4. Print array of prime nunbers for given count
 * 5. Get Prime number for given count 
 * */
function assertTrue($con){
	print ($con ? 'Pass' : 'Fail');
	echo "\n";
}
assertTrue(is_numeric($numCount));
assertTrue($argc == 3);
assertTrue(is_numeric($number));
assertTrue(is_array($array));
?>
