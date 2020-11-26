<?php
namespace desrodman\authenticator\assets;
use yii\web\AssetBundle;   

class AuthenticatorAsset extends AssetBundle {

    // The directory that contains the source asset files for this asset bundle
    public $sourcePath = '@desrodman/authenticator/web';

    // List of CSS files that this bundle contains
    public $css = [
//    	'css/bootstrap.css'
//        , 'css/authenticator.css'
        'css/adminlte.min.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset'
        , 'yii\bootstrap4\BootstrapAsset'
        , 'yii\bootstrap4\BootstrapPluginAsset'
    ];

}