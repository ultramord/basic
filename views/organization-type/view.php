<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrganizationType */

$this->title = $model->organization_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Organization Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->organization_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->organization_type_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'organization_type_id',
            'organization_type_name',
        ],
    ]) ?>

</div>
