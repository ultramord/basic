<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AdType */

$this->title = $model->ad_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Ad Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ad_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ad_type_id], [
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
            'ad_type_id',
            'ad_type',
        ],
    ]) ?>

</div>
