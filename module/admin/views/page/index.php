<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\image;
/* @var $this yii\web\View */
/* @var $searchModel app\module\admin\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товари';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'foto',
            'title',
            'text:ntext',
            'category.title',
            'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    

</div>
