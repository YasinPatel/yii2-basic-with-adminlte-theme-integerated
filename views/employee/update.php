<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title =  Yii::$app->params['apptitle']." Update Employee";
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
        <li> <?php echo Html::a(Yii::t('app', '<i class="fa fa-dashboard"></i> Home'), ['site/index']); ?> </li>
        <li>  <?php echo Html::a(Yii::t('app', 'Employees'), ['employee/index']); ?></li>
        <li><a href="#" class="active">Update Employee</a></li>
    </ol>
  </section>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
