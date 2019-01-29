<?php

use yii\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\base\Widget;
use yii\base\Component;
use yii\base\BaseObject;

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-right info">
                <p>Harliyan Tri Mardian</p>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Home', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        ['label' => 'About', 'icon' => 'fa fa-file-code-o', 'url' => ['/site/about'],],
                        ['label' => 'Contact', 'icon' => 'fa fa-file-code-o', 'url' => ['/site/contact'],],
                        ['label' => 'Login', 'icon' => 'fa fa-file-code-o', 'url' => ['/site/login'],],
                        ['label' => 'Jenis Makanan', 'icon' => 'fa fa-file-code-o', 'url' => ['/jenis-makanan'],],
                        ['label' => 'Debug', 'icon' => 'fa fa-file-code-o', 'url' => ['/debug'],],
                        ['label' => 'Gii', 'icon' => 'fa fa-dashboard', 'url' => ['/gii'],],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
