<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content">
  <div class="row">
    <!-- right column -->
    <div class="col-md-12">
      <!-- Horizontal Form -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php $form = ActiveForm::begin([

          'id'=>'user-form',
          'layout'=>'horizontal',
          'enableAjaxValidation'=>true,
          'options' => ['class' => 'form-horizontal','enctype'=>'multipart/form-data'],
          'fieldConfig' => [
            //'template' => " <div class=\"control-group\">{lable}<div class=\"controls\">{input}</div>\n<div class=\"col-lg-7\">{error}</div></div>",
            'enableClientValidation'=>true,
            'enableAjaxValidation'=>true,
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'offset' => 'col-sm-offset-4',
            'wrapper' => 'col-md-6',
            'error' => '',
            'hint' => '',
            ],
          ],
        ]); ?>
          <div class="box-body">

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'salary')->textInput() ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="col-sm-offset-2">
            <?= Html::submitButton($model->isNewRecord ? 'Add' : 'Update', ['class' =>'btn btn-primary']) ?>
            <a href="<?=Yii::$app->request->baseUrl?>/employee/index" class="btn btn-default">Cancel</a>

          </div>
          </div>
          <!-- /.box-footer -->
          <?php ActiveForm::end(); ?>

      </div>
      <!-- /.box -->

    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</section>
