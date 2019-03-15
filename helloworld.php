<?php
echo "<h4>This is a title</h4>";
echo "This is the second sentance";
echo "This is the last sentance"
$txt = "cant read!";
echo "I .$txt!. ";
?> 








<?php 
$stri1 = 'Hello ';
$stri2 = 'World!'; 
$output_1 = $stri1.$stri2; 
$stri1 = 'Hello ';
$output_2 = $stri1.'World!'; 
$stri1 = 'Hello';
$stri2 = 'World!';
$output_3 = sprintf('%s %s', $stri1, $stri2); /
$stri1 = 'Hello ';
$stri2 = '{a}World!';
$output_4 = str_replace('{a}', $stri1, $stri2);
?>



<?php
$t = date("H")
if ($t = "12")
{
$output = even(12);
}
?>