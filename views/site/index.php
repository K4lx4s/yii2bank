<?php

/* @var $this yii\web\View */

$this->title = 'Welcome to Yii2Bank';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to our bank</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Transfer funds</h2>

                <p> You can transfer funds to any of hour clients. You may also trabsfer money to someone that is not our client yet! You may do this from your dashboard page.</p>

                <p><a class="btn btn-default" href="index.php?r=site%2Fdashboard"> Dashboard page</a></p>
            </div>
            <div class="col-lg-6">
                <h2>Check the balance of all our clients</h2>

                <p>Another feauter of our site is checking all hours clients and their balance just in one page! Click the below button to check it.</p>

                <p><a class="btn btn-default" href="index.php?r=site%2Fclients">Client list</a></p>
            </div>
        </div>

    </div>
</div>
