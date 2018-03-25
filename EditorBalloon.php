<?php
/**
 * Created by PhpStorm.
 * User: st.kevich
 * Date: 25.03.18
 * Time: 18:05
 */
namespace app\widgets\ckeditor5;

use yii\helpers\Html;

class EditorBalloon extends CKEditor5
{
    /**
     * @var string
     */
    public $editorType = 'Balloon';

    /**
     * @param \yii\web\View $view
     */
    protected function registerAssets($view)
    {
        BalloonAssets::register($view);
    }

    protected function printEditorTag()
    {
        print Html::tag('div', '', $this->options);
    }

}
