<?php

use yii\helpers\Html;

$this->title = 'Update Satuan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="satuan-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>   
</div>
