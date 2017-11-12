<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Disaster Evacuation System';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <!--<?= $this->Html->meta('icon') ?>-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>



    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body style="background-color: ;">
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name"> 
                <!--<h1><a target="_blank" href="home.php">Disaster Evacuation System</a></h1>-->
                <h1 style="color:white;">Disaster Evacuation System</h1>
            </li>

           <!-- <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>-->
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <!--<li><a target="_blank" href="">Admin Login</a></li>
                <li class="name"><a>Admin Login</a></li>
                <li>
                <?php echo $this->Html->link('Logout',['controller'=>'users', 'action'=>'logout']); ?>    
                </li>
                <li>
                <?php echo $this->Html->link('Signup',['controller'=>'users', 'action'=>'signup']); ?>    
                </li>
                <li>
                <?php echo $this->Html->link('Forgot Password',['controller'=>'users', 'action'=>'forgotPassword']); ?>    
                </li>-->
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container-fluid clearfix" style="background-image: 'C:\xampp\htdocs\cake-auth-test\cake-auth-test\images.jpg';">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
