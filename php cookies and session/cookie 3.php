
<?php
setcookie("name","moorhy",time()+60*1);
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0)
 {
  echo "Cookies are enabled.";
} 
else
 {
  echo "Cookies are disabled.";
}
?>

</body>
</html>