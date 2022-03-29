<?php
$link=mysqli_connect("localhost", "root","",3307) or die (mysqli_error($link));
mysqli_select_db ($link, "php_connection") or die (mysqli_error($link));

?>