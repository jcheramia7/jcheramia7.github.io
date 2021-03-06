<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?/*= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
             'first_name',
            // 'middle_name',
             'last_name',
            // 'contact',
            // 'marital_status',
            // 'active_inactive',
            // 'birth_year',
            // 'organization',
            // 'type',
            // 'tot/al_user',
             'barangay',
            // 'city_municipal',
            // 'province',
            // 'region',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
