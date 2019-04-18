<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<br><br>
    <h1>Countries</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <a href="http://localhost/index.php?r=site%2Fabout&str=<?= Html::encode("{$country->id}") ?>">
                    <?= Html::encode("({$country->name})") ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>