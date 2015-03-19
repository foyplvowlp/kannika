<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {

        $a = 3;
        $b = 5;
        $sum = $a + $b;

        $danai = [10, 20, 30, 40];



        return $this->render('test1', [
                    'sum' => $sum,
                    'danai' => $danai,
                        ]
        );
    }

    public function actionTest2($fname, $lname) {

        return $this->render('test2', [
                    'fname' => $fname,
                    'lname' => $lname,
                        ]
        );
    }

}
