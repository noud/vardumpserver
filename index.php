<?php


require __DIR__.'/vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\ServerDumper;

VarDumper::setHandler(function ($var) {
    $cloner = new VarCloner();
    $dumper = new ServerDumper('tcp://127.0.0.1:9912');
    $dumper->dump($cloner->cloneVar($var));
});

dump('xxxx');