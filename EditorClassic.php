<?php
/**
 * Created by PhpStorm.
 * User: st.kevich
 * Date: 25.03.18
 * Time: 18:05
 */
namespace app\widgets\ckeditor5;

use yii\helpers\Html;

class EditorClassic extends CKEditor5
{
    /**
     * @var string
     */
    public $editorType = 'Classic';

    /**
     * @param \yii\web\View $view
     */
    protected function registerAssets($view)
    {
        ClassicAssets::register($view);
    }

    protected function printEditorTag()
    {
        if ($this->hasModel()) {
            print Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            print Html::textarea($this->name, $this->value, $this->options);
        }
    }

}
