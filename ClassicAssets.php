<?php
/**
 * Created by PhpStorm.
 * User: st.kevich
 * Date: 25.03.18
 * Time: 18:05
 */
namespace app\widgets\ckeditor5;

use yii\web\AssetBundle;

class ClassicAssets extends AssetBundle
{

    public $css = [
    ];

    public $js = [
        'https://cdn.ckeditor.com/ckeditor5/1.0.0-beta.1/classic/ckeditor.js',
    ];

    public $depends = [
    ];
}