<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AuthUser */

$this->title = '添加后台用户';
$this->params['breadcrumbs'][] = ['label' => '后台用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
