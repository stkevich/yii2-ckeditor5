<?php
/**
 * Created by PhpStorm.
 * User: st.kevich
 * Date: 25.03.18
 * Time: 18:05
 */
namespace stkevich\ckeditor5;

use yii\web\AssetBundle;

class InlineAssets extends AssetBundle
{

    public $css = [
    ];

    public $js = [
        'https://cdn.ckeditor.com/ckeditor5/11.0.1/inline/ckeditor.js',
    ];

    public $depends = [
    ];
}