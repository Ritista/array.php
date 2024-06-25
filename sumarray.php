<html>
<body>
<?php
function sum($arr, $n)
{
    $sum=0;
    for($i=0; $i<$n; $i++)
    $sum +=$arr[$i];
    return $sum;
}
$arr= array (12,3,4,15);
$n= ($arr);
$sum= sum($arr, $n);
echo "sum of array is ", $sum;
echo " average of array is", $sum/$n;
?>
</body>
</html>