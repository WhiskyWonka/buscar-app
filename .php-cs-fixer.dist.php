<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('')
    ->notPath('')
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
        'align_multiline_comment' => ['comment_type' => 'phpdocs_only'],
        'assign_null_coalescing_to_coalesce_equal' => true,
    ])
    ->setFinder($finder);