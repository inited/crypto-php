<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if(isset($_FILES["file"]["tmp_name"])) {
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    echo "OK";
}
?>
