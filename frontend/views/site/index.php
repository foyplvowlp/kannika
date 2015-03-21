<!DOCTYPE HTML>
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Kannika';
?>

<?php
$route1 = Yii::$app->urlManager->createUrl('test/test1');
?>
<a href ="<?= $route1 ?>">ไปที่ Test1</a>

<br>

<?php
$route2 = Yii::$app->urlManager->createUrl([
    'test/test2',
    'fname' => 'Danai',
    'lname' => 'Sronsai'
        ]);
?>
<a href ="<?= $route2 ?>">ไปที่ Test2</a>
<br>



<?=
Html::a('ลิงค์ที่แบบ 3', ['test/test1']);
?>




<?php //Yii::$app->db->open();    ?>
