<?php

/**
 * Extension Manager/Repository config file for ext "base".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'base',
    'description' => 'base extension Made By oussemaharrabi.tn',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Oussema\\Base\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'oussema harrabi',
    'author_email' => 'contact@oussemaharrabi.tn',
    'author_company' => 'FreeLancer',
    'version' => '1.0.0',
];
