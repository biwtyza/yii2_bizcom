<?php
$url1=yii::$app->urlManager->createUrl("test/index");
?>
<a href="<?=$url1?>"> ไปหน้า index </a>

<br>
<?php
$url2=yii::$app->urlManager->createUrl(["test/test3",'sname'=>"wanchalearm",'fname'=>"boonphasit"]);
?>
<a href="<?=$url2?>"> ไปหน้า test3 </a>
