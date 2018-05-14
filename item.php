<!doctype html>
<html>
<head><meta http-equiv="content-type" content="text/html;"></head>
<body>
<form action="q.php" method="post">
    Order:&nbsp;<input type="number" name="c1"><br><br>
    Operation:&nbsp;<input type="text" name="c2"><br>
    (syntax:<strong>&nbsp;$i "+" $j "%" 3&nbsp;</strong>)<br><br>
    <input type="submit" name="submit" value="Calculate / Reset">
</form>
<?php
$n=$_POST['c1']; $p=$_POST['c2'];
echo "<table style=\"text-align: center; margin: auto;\" cellpadding=\"8\">\n";
for ($i=0; $i<$n; $i++) {
    echo "<tr>\n";
    for ($j=0; $j<$n; $j++) {
        eval("\$a=\"$p\";");
        echo "\t<td>".$a."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";
?>
</body>
</html>