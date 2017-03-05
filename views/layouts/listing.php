<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="<?php //echo Yii::$app->request->baseUrl; ?>/img/logo.png" /> -->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->beginBody() ?>
        <?php include_once('top_header.php');?>
        <?php include_once('sidebar.php');?>
        <?= $content?>
        <?php //include_once('footer.php');?>
    <?php $this->endBody() ?>
  </div>
</body>
</html>
<?php $this->endPage() ?>
