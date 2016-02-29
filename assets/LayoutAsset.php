<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Konan
 * @since 2.0
 */
class LayoutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "asset/css/bootstrap.css",
        "asset/font-awesome/css/font-awesome.css",
        "asset/css/style.css",
        "asset/css/style-responsive.css",
    ];
    public $js = [
        "asset/js/jquery.js",
        "asset/js/bootstrap.min.js",
        "asset/js/jquery-1.8.3.min.js",
        "asset/js/jquery-ui-1.9.2.custom.min.js",
        "asset/js/jquery.ui.touch-punch.min.js",
        "asset/js/jquery.dcjqaccordion.2.7.js",
        "asset/js/jquery.scrollTo.min.js",
        "asset/js/jquery.nicescroll.js",
        "asset/js/common-scripts.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
