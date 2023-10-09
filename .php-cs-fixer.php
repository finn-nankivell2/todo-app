<?php
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

$config->setRules([
        '@PSR2' => true,
        'indentation_type' => true,
    ])
    ->setIndent("\t")
    ->setLineEnding("\n")
    ->setFinder($finder);

return $config;
