<?php
$luckybastards = 21;
$people = (range(1, $luckybastards) );
echo "List of people : " . implode (",",$people) . "<br>";
shuffle($people);
echo "Shuffled list of people : " . implode (",",$people) . "<br><br>";
$max = count($people) - 1;
for ($x = 0; $x < count($people) - 1; $x++) {
	echo "System sends email to " . $people[$x] . " and says: You are number " . $people[$x] . " and you buy a present for " . $people[$x+1] . "<br>";
}
echo "System sends email to " . $people[$x] . "and says:  You are number " . $people[$max] . " and you buy a present for " . $people[0] . "<br>";
?>
