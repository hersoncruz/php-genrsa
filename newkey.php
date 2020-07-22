<?php
require __DIR__ . '/vendor/autoload.php';
use \phpseclib\Crypt\RSA;

$rsa = new RSA();
$rsa->setPublicKeyFormat('CRYPT_RSA_PUBLIC_FORMAT_OPENSSH');
$result = $rsa->createKey();
echo "<pre>";
echo $result["privatekey"];
echo "\r\n\r\n";
echo $result["publickey"];
?>