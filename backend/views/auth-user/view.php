<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AuthUser */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Auth Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'status',
            'role',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
