<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin([

            'options'=>['enctype'=>'multipart/form-data']

    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'image',[

        'template'=>'
        <div class="custom-file">
                {input}
                {label}
                {error}
        </div>
         ',
         'labelOptions'=>['class'=>'custom-file-label'],
         'inputOptions'=>['class'=>'custom-file-input']


    ])->fileInput() ?>

    

    <?= $form->field($model, 'price')->textInput([
        'maxlength' => true,
        'type'=>'number'
]) ?>

    <?= $form->field($model, 'status')->checkBox() ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
