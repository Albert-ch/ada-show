<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BrowseLog */

$this->title = 'Create Browse Log';
$this->params['breadcrumbs'][] = ['label' => 'Browse Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="browse-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
