<!DOCTYP html>
<html>
<body>
<?php
$Q=date("H");
if($Q>"10")
{
echo "have a good Day";
}
elseif($Q<"20")
{
echo "good evening";
}
else
{
echo "good night";
}
?>
</body>
</html>