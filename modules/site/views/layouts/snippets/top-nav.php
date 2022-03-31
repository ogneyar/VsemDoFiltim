<!-- ?> -->
<!-- <br />
<div>
<a href="#"><img src="images/logo-filtim.jpg" width="100px" /></a>
<label></label>
</div>
<br />
 -->
<?php
use yii\helpers\Url;
use yii\bootstrap\NavBar;
use kartik\helpers\Html;
use app\models\User;

NavBar::begin([
    'brandLabel' => Html::tag(
        'div', 
        Html::decode('<a href="/"><img src="/images/logo-filtim.png" width="100px" /></a>&nbsp;&nbsp;' .  Yii::$app->params['name']), 
        ['class' => 'headerMain pull-left']
    ),
    'brandUrl' => Url::to(['/']),
    'options' => [
        'class' => 'navbar-default navbar-fixed-top',
    ],
]);

$profile = Yii::$app->user->isGuest ? 'default' : (Yii::$app->user->identity->role == User::ROLE_SUPERADMIN ? User::ROLE_ADMIN : Yii::$app->user->identity->role);
echo $this->renderFile('@app/modules/site/views/layouts/snippets/profile/' . $profile . '/top-nav.php', [
    'cart' => $cart,
]);

NavBar::end();
