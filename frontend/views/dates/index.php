<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\DatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Dates */

$this->title = 'Dates';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--    <p>-->
<!--        --><?//= Html::a('Create Dates', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

<div class="dates-create">
	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dates',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

