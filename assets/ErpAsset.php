<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Konan
 * @since 2.0
 */
class ErpAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/bootstrap.css",
        "css/font-awesome.min.css",
        "css/main.css",
    ];
    public $js = [
        "js/bootstrap.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
