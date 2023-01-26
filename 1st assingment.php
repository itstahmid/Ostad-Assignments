<?php 

$num = 0;
// Using ternary operator

$num > 0 ? $result = "positive" : (($num < 0 ? ($num < -10 ? $result = "value is below -10" : $result = "negative") : $result = "its zero"));
echo $result;