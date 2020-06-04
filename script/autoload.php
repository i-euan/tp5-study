<?php

/**
 * autoload_function 欲注册的自动装载函数。如果没有提供任何参数，则自动注册 autoload 的默认实现函数spl_autoload()。
 * throw 此参数设置了 autoload_function 无法成功注册时， spl_autoload_register()是否抛出异常。
 * prepend 如果是 true，spl_autoload_register() 会添加函数到队列之首，而不是队列尾部。
 */
spl_autoload_register('autoload', true, true);

function autoload($class){
    echo $class.PHP_EOL;
    include __DIR__."/{$class}.php";
}

$euan = new Euan;

$euan->say();