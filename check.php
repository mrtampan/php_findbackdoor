<?php

$chk = shell_exec('grep -RPn "(passthru|shell_exec|system|phpinfo|base64_decode|chmod|mkdir|fopen|fclose|readfile) *\(" ');

print_r($chk);

$file = fopen("result.txt","w");
fwrite($file,$chk);
fclose($file);

?>