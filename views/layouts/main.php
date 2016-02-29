<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\LayoutAsset;

LayoutAsset::register($this);
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

<body>

    <section id="container" >

          <header class="header black-bg">

                  <div class="sidebar-toggle-box">

                      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>

                  </div>

                <a href="<?= Html::encode(Yii::$app->params['CURRENT_URL']) ?>index" class="logo"><b>RETAKE PLAN</b></a>

                <div class="nav notify-row" id="top_menu">

                    <ul class="nav top-menu">

                        <li class="dropdown">

                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">

                                <i class="fa fa-tasks"></i>

                                <span class="badge bg-theme">4</span>

                            </a>

                            <ul class="dropdown-menu extended tasks-bar">

                                <div class="notify-arrow notify-arrow-green"></div>

                                <li>

                                    <p class="green">You have 4 pending tasks</p>

                                </li>

                                <li>

                                    <a href="index.html#">

                                        <div class="task-info">

                                            <div class="desc">DashGum Admin Panel</div>

                                            <div class="percent">40%</div>

                                        </div>

                                        <div class="progress progress-striped">

                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

                                                <span class="sr-only">40% Complete (success)</span>

                                            </div>

                                        </div>

                                    </a>

                                </li>

                                <li>

                                    <a href="index.html#">

                                        <div class="task-info">

                                            <div class="desc">Database Update</div>

                                            <div class="percent">60%</div>

                                        </div>

                                        <div class="progress progress-striped">

                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">

                                                <span class="sr-only">60% Complete (warning)</span>

                                            </div>

                                        </div>

                                    </a>

                                </li>

                                <li>

                                    <a href="index.html#">

                                        <div class="task-info">

                                            <div class="desc">Product Development</div>

                                            <div class="percent">80%</div>

                                        </div>

                                        <div class="progress progress-striped">

                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">

                                                <span class="sr-only">80% Complete</span>

                                            </div>

                                        </div>

                                    </a>

                                </li>

                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Payments Sent</div>
                                            <div class="percent">70%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only">70% Complete (Important)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="external">
                                    <a href="#">See All Tasks</a>
                                </li>
                            </ul>
                        </li>

                        <li id="header_inbox_bar" class="dropdown">

                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">

                                <i class="fa fa-envelope-o"></i>

                                <span class="badge bg-theme">5</span>

                            </a>

                            <ul class="dropdown-menu extended inbox">

                                <div class="notify-arrow notify-arrow-green"></div>

                                <li>

                                    <p class="green">You have 5 new messages</p>

                                </li>

                                <li>

                                    <a href="index.html#">

                                        <span class="photo"><img alt="avatar" src="asset/img/ui-zac.jpg"></span>

                                        <span class="subject">

                                        <span class="from">Zac Snider</span>

                                        <span class="time">Just now</span>

                                        </span>

                                        <span class="message">

                                            Hi mate, how is everything?

                                        </span>

                                    </a>

                                </li>

                                <li>

                                    <a href="index.html#">

                                        <span class="photo"><img alt="avatar" src="asset/img/ui-divya.jpg"></span>

                                        <span class="subject">

                                        <span class="from">Divya Manian</span>

                                        <span class="time">40 mins.</span>

                                        </span>

                                        <span class="message">
                                         Hi, I need your help with this.
                                        </span>

                                    </a>

                                </li>

                                <li>

                                    <a href="index.html#">

                                        <span class="photo"><img alt="avatar"
                                            src="asset/img/ui-danro.jpg"></span>

                                        <span class="subject">

                                        <span class="from">Dan Rogers</span>

                                        <span class="time">2 hrs.</span>

                                        </span>

                                        <span class="message">
                                            Love your new Dashboard.

                                        </span>

                                    </a>

                                </li>

                                <li>

                                    <a href="index.html#">

                                        <span class="photo"><img alt="avatar" src="asset/img/ui-sherman.jpg"></span>

                                        <span class="subject">

                                        <span class="from">Dj Sherman</span>

                                        <span class="time">4 hrs.</span>

                                        </span>

                                        <span class="message">
                                            Please, answer asap.

                                        </span>

                                    </a>

                                </li>

                                <li>

                                    <a href="index.html#">See all messages</a>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </div>

                <div class="top-menu">

                    <ul class="nav pull-right top-menu">

                        <li><a class="logout" href="#">Logout</a></li>

                    </ul>
                </div>

          </header>

          <aside>

              <div id="sidebar"  class="nav-collapse ">

                  <ul class="sidebar-menu" id="nav-accordion">

                  	  <p class="centered">

                          <a href="#">

                              <img src="asset/img/ui-sam.jpg" class="img-circle" width="60">

                          </a>

                      </p>

                  	  <h5 class="centered">USER</h5>

                      <hr>

                      <li class="mt">

                          <a class="active" href="<?= Html::encode(Yii::$app->params['CURRENT_URL']) ?>index">

                              <i class="fa fa-dashboard"></i>

                              <span>HOME</span>

                          </a>

                      </li>

                      <li class="sub-menu">

                          <a href="javascript:;" >

                              <i class="fa fa-desktop"></i>

                              <span>SKILL TREE</span>

                          </a>

                          <ul class="sub">

                              <li><a  href="#">开放平台主页</a></li>

                              <li><a  href="<?= Html::encode(Yii::$app->params['CURRENT_URL']) ?>interface-test">API测试</a></li>

                              <li><a  href="#">API文档</a></li>

                          </ul>

                      </li>

                      <li class="sub-menu">

                          <a href="javascript:;" >

                              <i class="fa fa-cogs"></i>

                              <span>SETTING</span>

                          </a>

                          <ul class="sub">

                              <li><a  href="<?= Html::encode(Yii::$app->params['CURRENT_URL']) ?>conf">信息查看</a></li>

                              <li><a  href="<?= Html::encode(Yii::$app->params['CURRENT_URL']) ?>conf/create">信息添加</a></li>

                          </ul>

                      </li>

                      <li class="sub-menu">

                          <a href="javascript:;" >

                              <i class="fa fa-book"></i>

                              <span>SOCIETY</span>

                          </a>

                          <ul class="sub">

                              <li class="active"><a  href="<?= Html::encode(Yii::$app->params['CURRENT_URL']) ?>job-manager">任务管理</a></li>

                              <li><a  href="#">任务添加</a></li>

                          </ul>

                      </li>

                      <li class="sub-menu">

                          <a href="javascript:;" >

                              <i class="fa fa-tasks"></i>

                              <span>HISTORY</span>

                          </a>

                          <ul class="sub">

                              <li><a  href="#">同步日志查询</a></li>

                          </ul>

                      </li>

                  </ul>

              </div>

          </aside>

          <section id="main-content">

              <section class="wrapper site-min-height">

                    <?= $content ?>

              </section>

          </section>

          <footer class="site-footer">

              <div class="text-center">

                  2015 - 明星衣橱

                  <a href="blank.html#" class="go-top">

                      <i class="fa fa-angle-up"></i>

                  </a>

              </div>

          </footer>

      </section>

</body>

<script>

    $(function(){
        $('select.styled').customSelect();
    });

</script>

<script type="text/javascript">
    $(document).ready(function () {
    var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashgum!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
        // (string | optional) the image to display on the left
        image: 'asset/img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: true,
        // (int | optional) the time you want it to be alive for before fading out
        time: '',
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
    });

    return false;
    });
</script>

<?php $this->endBody() ?>

</html>

<?php $this->endPage() ?>
