<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Dates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dates-form">

    <?php $form = ActiveForm::begin(['action' => ['dates/create']]); ?>

	<?= $form->field($model, 'dates')->widget('kartik\widgets\DatePicker', [
		'name' => 'check_issue_date',
		'value' => date('Y-m-d', strtotime('+2 days')),
		'options' => ['placeholder' => 'Select issue date ...'],
		'pluginOptions' => [
			'format' => 'yyyy-mm-dd',
			'startView'=> 2,
			'autoclose'=>true,
			'todayHighlight' => true
		]
	]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
