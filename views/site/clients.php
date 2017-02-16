<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Our clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-clients">
    <h1><?= Html::encode($this->title) ?></h1>
<?php
$clients = (new \yii\db\Query())
    ->select(['name','email','address','current_balance'])
    ->from('users')                           
    ->all();
$client_numbers=count($clients);
echo '<div class="col-lg-3">';
echo '<ul  class="list-group">';
echo '<li class="list-group-item list-group-item-warning">Name</li>';
$c=0 ; while ($c<$client_numbers){
    echo '<li class="list-group-item list-group-item-info">'.$clients[$c]['name'];
    echo '</li>';
    $c++;
}
echo '</ul>';
echo '</div>';
echo '<div class="col-lg-3">';
echo '<ul  class="list-group">';
echo '<li class="list-group-item list-group-item-warning">email</li>';
$c=0 ; while ($c<$client_numbers){
    echo '<li class="list-group-item list-group-item-info">'.$clients[$c]['email'];
    echo '</li>';
    $c++;
}
echo '</ul>';
echo '</div>';
echo '<div class="col-lg-3">';
echo '<ul  class="list-group">';
echo '<li class="list-group-item list-group-item-warning">address</li>';
$c=0 ; while ($c<$client_numbers){
    echo '<li class="list-group-item list-group-item-info">'.$clients[$c]['address'];
    echo '</li>';
    $c++;
}
echo '</ul>';
echo '</div>';
echo '<div class="col-lg-3">';
echo '<ul  class="list-group">';
echo '<li class="list-group-item list-group-item-warning">balance</li>';
$c=0 ; while ($c<$client_numbers){
    echo '<li class="list-group-item list-group-item-info">';
    print number_format($clients[$c]['current_balance'], 2, '.', ',');
    echo '</li>';
    $c++;
}
echo '</ul>';
echo '</div>';
?>

</div>
