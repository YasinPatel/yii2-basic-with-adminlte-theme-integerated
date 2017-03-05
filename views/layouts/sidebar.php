<?php
$controller = strtolower(Yii::$app->controller->id);
$action = strtolower(Yii::$app->controller->action->id);

$dash=$emp='';
if($controller == 'site' && $action == 'index')
    $dash = 'active';
elseif($controller == 'employee')
{
    $emp = 'active';
}
?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <!-- <li class="header"></li> -->

      <li class="<?=$dash?>">
        <a href="<?=Yii::$app->request->baseUrl?>/site/index">
          <i class="fa fa-dashboard "></i> <span>Dashboard</span>
        </a>
      </li>


      <li class="<?=$emp?>">
        <a href="<?=Yii::$app->request->baseUrl?>/employee/index">
          <i class="fa fa-user "></i> <span>Employees</span>
        </a>
      </li>
  </section>
  <!-- /.sidebar -->
</aside>
