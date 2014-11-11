<?PHP 

$n = rand(0,100);
$m = rand(0,100);
$a = 10;

$b = $m-$a;
$c = $n-$a;

if ($b == $c)
{
echo ("$m and $n равноудалены от $a"); 
}
if ($b > $c)
{
echo ("$n ближе к $a чем $m"); 
}
if ($b < $c)
{
echo ("$m ближе к $a чем $n"); 
}
?>