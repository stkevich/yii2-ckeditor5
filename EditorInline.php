<?php
/**
 * Created by PhpStorm.
 * User: st.kevich
 * Date: 25.03.18
 * Time: 18:05
 */
namespace stkevich\ckeditor5;

use yii\helpers\Html;

class EditorInline extends CKEditor5
{
    /**
     * @var string
     */
    public $editorType = 'Inline';

    /**
     * @inheritdoc
     */
    protected function registerAssets($view)
    {
        InlineAssets::register($view);
    }

    /**
     * @inheritdoc
     */
    protected function printEditorTag()
    {
        print Html::tag('div', 'qweaasd', $this->options);
    }

}
