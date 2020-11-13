<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Course */
/* @var $form ActiveForm */
?>
<div class="course-Course">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'cost') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'url') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- course-Course -->
