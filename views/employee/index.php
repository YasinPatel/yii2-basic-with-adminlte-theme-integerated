<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::$app->params['apptitle'].' : Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-wrapper">
  <section class="content-header">

    <ol class="breadcrumb">
      <li> <?php echo Html::a(Yii::t('app', '<i class="fa fa-dashboard"></i> Home'), ['site/index']); ?> </li>
      <li><a href="#" class="active"> Employee List</a></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title pull-left"><?= Html::encode($this->title) ?></h3>
            <?= Html::a('<i class="fa fa-plus"></i> Add Employee', ['create'], ['class' => 'btn btn-primary btn-sm pull-right']) ?>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php \yii\widgets\Pjax::begin(['linkSelector'=>'','id'=>'w0-pjax']); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'showPageSummary' => false,
                'summary' => false,
                'pjax'=>true,
                'columns' => [
                    [
                            'class' => '\kartik\grid\CheckboxColumn',
                            'width'=>'5%',
                    ],
                    [
                            'width'=>'20%',
                            'attribute'=>'name',
                            'class' => '\kartik\grid\DataColumn',
                            // 'headerOptions' => ['style' => 'text-align:center'],
                            'pageSummary' => false,
                            'filter'=>true,
                    ],
                    [
                            'width'=>'20%',
                            'attribute'=>'email',
                            'class' => '\kartik\grid\DataColumn',
                            // 'headerOptions' => ['style' => 'text-align:center'],
                            'pageSummary' => false,
                            'filter'=>true,
                    ],
                    [
                            'width'=>'20%',
                            'attribute'=>'salary',
                            'class' => '\kartik\grid\DataColumn',
                            // 'headerOptions' => ['style' => 'text-align:center'],
                            'pageSummary' => false,
                            'filter'=>true,
                    ],
                    [
                            'class' => '\kartik\grid\ActionColumn',
                            'contentOptions' => ['style' => ''],
                            // 'headerOptions' => ['style' => 'text-align:center'],
                            'template' => '{view}&nbsp;{update}&nbsp;{delete}', //{view}&nbsp;
                            'buttons' => [

                                            'view' => function ($url, $model)
                                            {
                                                return Html::a('<button class="btn btn-default btn-sm" title="View Profile"><i class="fa fa-eye"></i></button>',
                                                $url, [
                                                    'data-pjax' => true
                                                ]);
                                            },
                                            'update' => function ($url, $model)
                                            {
                                                return Html::a('<button class="btn btn-default btn-sm" title="Update Profile"><i class="fa fa-pencil"></i></button>',
                                                $url, [
                                                'data-pjax' => true
                                                ]);
                                            },
                                            'delete' => function ($url, $model)
                                            {
                                              return '<button class="btn btn-default delete btn-sm" title="Delete" id="'.$model->id.'" field="Y" onclick="del('.$model->id.',\'Y\''.')"><i class="fa fa-trash-o"></i></button>';

                                            }
                                    ],
                                    'urlCreator' => function ($action, $model, $key, $index) {

                                            if ($action === 'view') {
                                                    $url =Yii::$app->request->baseUrl.'/employee/view?id='.$model->id;
                                                    return $url;
                                            }
                                            if ($action === 'update') {
                                                    $url = Yii::$app->request->baseUrl.'/employee/update?id='.$model->id;
                                                    return $url;
                                            }
                                            if ($action === 'delete') {
                                                    $url ='delete?id='.$model->id;
                                                    return $url;
                                            }
                                    }
                    ],
                ],
            ]); ?>
            <?php \yii\widgets\Pjax::end(); ?>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
</div>
