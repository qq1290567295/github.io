<?php
$a=$_GET['formData'];
  file_put_contents('aaa.txt',$a,FILE_APPEND);
  echo "已写入";
?>
