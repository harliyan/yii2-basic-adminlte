<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisMakanan */

$this->title = 'Create Jenis Makanan';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Makanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-makanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
