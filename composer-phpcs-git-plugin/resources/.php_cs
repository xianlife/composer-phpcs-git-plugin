/**
* 将本文件放置在项目根目录下（文件名为 .php_cs
*/
<?php
return PhpCsFixer\Config::create()
    ->setRules([
        "@Symfony" => true,
        'array_syntax' => array('syntax' => 'short'),
        'ordered_imports' => true,
        'no_unused_imports' => true
    ]);