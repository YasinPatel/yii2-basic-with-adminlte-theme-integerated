<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = Yii::$app->params['apptitle'].' : Employees List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
      <li> <?php echo Html::a(Yii::t('app', '<i class="fa fa-dashboard"></i> Home'), ['site/index']); ?> </li>
      <li>  <?php echo Html::a(Yii::t('app', 'Employees'), ['employee/index']); ?></li>
      <li><a href="#" class="active"> Employee Details</a></li>
    </ol>
  </section>

  <section class="content">
    <div class="invoice">
      <div class="row">
              <div class="col-xs-12">
                <h2 class="page-header">
                 Employee Details
                </h2>
              </div>
              <!-- /.col -->
            </div>

      <div class="row">

        <p>Name : <?=$model->name?></p>
        <p>Email : <?=$model->email?></p>
        <p>Salary : <?=$model->salary?></p>
      </div>

    </div>
  </section>
</div>
