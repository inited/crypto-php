<?php
$filename = $_GET["filename"];

header("Content-Type: image/jpeg");

passthru("openssl cms -decrypt -in uploads/$filename -inform DER -inkey private.key");

