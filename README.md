YII2 CKEditor 5
==================
More details about it on site https://docs.ckeditor.com/ckeditor5/latest/builds/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist stkevich/yii2-ckeditor5 "*"
```

or add

```
"stkevich/yii2-ckeditor5": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by:

```php
use \stkevich\ckeditor5\EditorClassic;
...
$form->field($model, 'fieldName')->widget(EditorClassic::className(), []);
```

You can edit toolbar or uploadUrl:
```php
$form->field($model, 'fieldName')->widget(EditorClassic::className(), 
    [
        'toolbar' => ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
        'uploadUrl' => '/someUpload.php',
    ]
);
```

More info in [guides](https://docs.ckeditor.com/ckeditor5/latest/builds/guides/overview.html)
