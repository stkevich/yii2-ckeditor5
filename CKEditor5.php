<?php
/**
 * Created by PhpStorm.
 * User: st.kevich
 * Date: 25.03.18
 * Time: 18:05
 */
namespace stkevich\ckeditor5;

use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;

abstract class CKEditor5 extends InputWidget
{
    /**
     * @var string
     */
    public $editorType = 'Classic';

    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * @var array Toolbar options array
     */
    public $toolbar = [];

    /**
     * @var string Url to image upload
     */
    public $uploadUrl = '';

    /**
     * @var array
     */
    public $options = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerAssets($this->getView());
        $this->registerEditorJS();
        $this->printEditorTag();
    }

    /**
     * Registration JS
     */
    protected function registerEditorJS()
    {
        if (!empty($this->toolbar)) {
            $this->clientOptions['toolbar'] = $this->toolbar;
        }
        if (!empty($this->uploadUrl)) {
            $this->clientOptions['ckfinder'] = ['uploadUrl' => $this->uploadUrl];
        }
        $clientOptions = Json::encode($this->clientOptions);

        $js = new JsExpression(
            $this->editorType . "Editor.create( document.querySelector( '#{$this->options['id']}' ), {$clientOptions} ).catch( error => {console.error( error );} );"
        );
        $this->view->registerJs($js);
    }

    /**
     * @param \yii\web\View $view
     */
    protected function registerAssets($view){}

    /**
     * View tag for editor
     */
    protected function printEditorTag(){}

}
