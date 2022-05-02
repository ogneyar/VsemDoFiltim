<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;

?>

<div class="Footer">
    <div class="FooterDiv">
        <a href="http://filtimbank.com"><img src="/images/footer/1_filtimbank.png" width="75px" /></a>
    </div>
    <div class="FooterDiv">
        <a href="http://blagosfera.su"><img src="/images/footer/2_blagosfera_round.png" width="50px" /></a>
    </div>
    <div class="FooterDiv">
        <a href="https://filtim.online"><img src="/images/footer/3_filtim-online.png" width="75px" /></a>
    </div>
    <div class="FooterDiv">
        <a href="#"><img src="/images/footer/4_filtim.png" width="50px" /></a>
    </div>
    <div class="FooterDiv">
        <a href="#"><img src="/images/footer/5_romashka.jpg" width="50px"  /></a>
    </div>
</div>

<?php
    echo Nav::widget([
        'items' => [
            [
                'label' => 'Политика конфиденциальности',
                'url' => Url::to(['/page/policy']),
                'linkOptions' => ['style' => 'color: red;']
            ],
            [
                'label' => 'Пункты выдачи',
                'url' => Url::to(['/page/punkty-vydachi']),
            ],
            [
                'label' => 'Контакты',
                'url' => Url::to(['/page/kontakty']),
            ],
            [
                'label' => 'О нас',
                'url' => Url::to(['/page/o-nas']),
            ],
        ],
        'options' => ['class' => 'nav-pills pull-left'],
    ])
?>
<br />
