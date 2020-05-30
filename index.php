<?php


require __DIR__.'/vendor/autoload.php';

use Symfony\Component\VarDumper\Dumper\HtmlDumper;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\ServerDumper;

VarDumper::setHandler(function ($var) {
    $cloner = new VarCloner();

    //Example: HtmlDumper outputs to external file, when call dump()
    $htmlDumper = new HtmlDumper();
    $htmlDumper->setOutput('dumps.html');
    $htmlDumper->dump($cloner->cloneVar($var));


    //Example: ServerDumper
    $dumper = new ServerDumper('tcp://127.0.0.1:9912');
    $dumper->dump($cloner->cloneVar($var));
});

dump('xxxx');