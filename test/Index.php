<?php


define('ROOT_PATH',str_replace('\\','/',dirname(__DIR__)));
ini_set('display_errors','on');
include  ROOT_PATH."/vendor/autoload.php";

use Composertest\Test;

      $test = new Test();
      $test ->add();


