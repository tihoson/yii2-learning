<?php

namespace frontend\controllers;

use Yii;

class CallController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new \app\models\Call();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }
    
        return $this->render('Call', [
            'model' => $model,
        ]);
    }
}
