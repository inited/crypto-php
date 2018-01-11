<html>
<body>
List:
<ul>
<?php
    $files = scandir("uploads");
    foreach($files as $file) echo "<li><a href=\"decrypt.php?filename=$file\">$file</a></li>\n";
?>
</ul>
</body>
</html>
