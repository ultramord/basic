<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StreetTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тип улицы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="street-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать тип улицы', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'street_type_id',
            'street_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
