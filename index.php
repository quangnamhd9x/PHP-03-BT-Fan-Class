<?php
include 'Fan.php';

$newfan1 = new Fan(true);
$newfan1->toString();
echo '<br>';
$newfan2 = new Fan(false);
$newfan2->toString();

