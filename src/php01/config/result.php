<?php
$name=htmlspecialchars($_POST["name"],ENT_QUOTES);
$choices=htmlspecialchars($_POST["choices"],ENT_QUOTES);
$count=htmlspecialchars($_POST["count"],ENT_QUOTES);

print "私の名前は、" . $name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $count;
