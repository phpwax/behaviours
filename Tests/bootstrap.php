<?php
spl_autoload_register(function ($class) {
  if (0 === strpos(ltrim($class, '/'), 'Wax\Behaviours')) {
    if (file_exists($file = __DIR__.'/../'.substr(str_replace('\\', '/', $class), strlen('Wax\Behaviours')).'.php')) {
      require_once $file;
    }
  }
});
require_once __DIR__."/../vendor/autoload.php";