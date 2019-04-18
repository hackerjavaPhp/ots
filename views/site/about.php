<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
         <?php foreach ($countries as $country): ?>


             <h1><?= Html::encode("{$country->name}") ?></h1>

            <p><?= Html::encode("{$country->parent_id}") ?></p>
            <p><?php echo $str;?></p>


            </li>
         <?php endforeach; ?>


    <code><?= __FILE__ ?></code>
</div>
