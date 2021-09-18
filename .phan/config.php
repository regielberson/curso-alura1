<?php

return [
    "target_php_version" =>  '8.0',
    'directory_list' => [
        'vendor/symfony/dom-crawler',
        'vendor/guzzlehttp/guzzle/src',
        'vendor/psr/http-message'
        /* esta linha abaixo é um teste para verificar se o problema é o caminho. */
   , 'C:\Users\rlirio\Buscador-Cursos\vendor\symfony'

    ],
    "exclude_analysis_directory_list" => [
        'vendor/'
    ],
    'plugins' => [
        // checks if a function, closure or method unconditionally returns.
        // can also be written as 'vendor/phan/phan/.phan/plugins/AlwaysReturnPlugin.php'
        'AlwaysReturnPlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'DuplicateExpressionPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
        'SleepCheckerPlugin',
        // Checks for syntactically unreachable statements in
        // the global scope or function bodies.
        'UnreachableCodePlugin',
        'UseReturnValuePlugin',
        'EmptyStatementListPlugin',
        'LoopVariableReusePlugin',
    ],
];
