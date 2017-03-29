<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdType */

$this->title = 'Update Ad Type: ' . $model->ad_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Ad Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ad_type_id, 'url' => ['view', 'id' => $model->ad_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ad-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
