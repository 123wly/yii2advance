<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = '用户登陆';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->label('用户名')->textInput(['placeholder' => '用户名/电子邮箱']) ?>
                <?= $form->field($model, 'password')->passwordInput()->label('登录密码') ?>
                <?= $form->field($model, 'rememberMe')->checkbox()->label('记住我的登录状态') ?>
                <div style="color:#999;margin:1em 0">
                    如果您忘记密码请点击这里： <?= Html::a('找回密码', ['site/request-password-reset']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton('登陆', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
