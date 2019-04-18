<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?php echo $form->field($model, 'name') ?>

<?php echo $form->field($model, 'email') ?>

<?php echo $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton('Отправить') ?>
    </div>

<?php ActiveForm::end(); ?>


<p>
    <a href="<?=Yii::$app->urlManager->createUrl(['site/index']);?>">links</a>
</p>

<p>
    <?=$name?>
</p>