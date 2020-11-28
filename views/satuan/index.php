<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Satuan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satuan-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Satuan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nm_satuan',

            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'template' => '{update}{delete}',
                'buttons'=>[
                    'update'=>function ($url, $model) {
                        return Html::a('Update', ['update', 'id' => (string)$model->id], ['class' => 'btn btn-sm btn-warning']);
                    },
                    'delete'=>function ($url, $model) {
                        return Html::a('Delete', ['delete', 'id' => (string)$model->id], ['class' => 'btn btn-sm btn-danger', 'onclick' => 'js:return confirm("Delete this data ?");']);
                    },
                ],
            ],
        ],
    ]); ?>


    <?php Pjax::end(); ?>

</div>
