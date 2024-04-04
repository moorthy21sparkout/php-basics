<?php   #cookie deleting method 
setcookie("buddy","null",time()-3600);
echo "the cookie is deleted";


?>



<?php
                                                 #cookie set meathod.
if(!isset($_COOKIE["buddy"]))
{
setcookie("buddy",1,time()+86400,'/') or die("cookie is not set");
echo "new visiter";
}
else
{
    echo "old visiter";
}

?>