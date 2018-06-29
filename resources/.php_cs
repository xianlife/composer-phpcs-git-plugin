/**
* 将本文件放置在项目根目录下（文件名为 .php_cs)
*/
return PhpCsFixer\Config::create()
    ->setUsingCache(false)
    ->setRules([
        "@Symfony" => true,
        'array_syntax' => array('syntax' => 'short'),
        'ordered_imports' => true,
        'no_unused_imports' => true
    ]);