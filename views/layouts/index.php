<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\ErpAsset;

ErpAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="shortcut icon" href="ico/favicon.png">

    <meta charset="<?= Yii::$app->charset ?>">

    <?= Html::csrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>

</head>

<?php $this->beginBody() ?>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="http://erp.hichao.com/index">Retake</a>

    </div>

    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">

        <li class="active">

            <a href="http://erp.hichao.com/index">主页</a></li>

        <li>

            <a href="#">开放平台</a>

        </li>

        <li class="dropdown">

            <a id='drop' href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                ERP服务
            </a>

            <ul class="dropdown-menu" aria-labelledby="drop">

                <li><a href="http://erp.hichao.com/conf">ERP主页</a></li>

                <li><a href="http://erp.hichao.com/conf">配置信息</a></li>

                <li><a href="#">同步检测</a></li>

                <li><a href="http://erp.hichao.com/conf/create">对接申请</a></li>

             </ul>
        </li>

        <li>

            <a data-toggle="modal" data-target="#myModal" href="#myModal">
                联系我们
                <!-- <i class="fa fa-envelope-o"></i> -->
            </a>

        </li>

      </ul>

    </div><!--/.nav-collapse -->

  </div>

</div>

<div class='main_body'>

    <hr>

    <?= $content ?>

</div>

<!-- FOOTER -->
<div id="f">

    <div class="container">

        <div class="row centered">

            <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>


        </div><!-- row -->

    </div><!-- container -->

</div><!-- Footer -->


<!-- MODAL FOR CONTACT -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

        <h4 class="modal-title" id="myModalLabel">联系我们</h4>

      </div>

      <div class="modal-body">

            <div class="row centered">

                <p>We are available 24/7, so don't hesitate to contact us.</p>

                <p>
                    Somestreet Ave, 987<br/>
                    London, UK.<br/>
                    +44 8948-4343<br/>
                    hi@blacktie.co

                </p>

            </div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal">
            关闭
        </button>

      </div>

    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->

</div><!-- /.modal -->

<?php $this->endBody() ?>

</html>

<?php $this->endPage() ?>
