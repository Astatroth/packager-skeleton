<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'src/MyPackage.php' => 'src/:uc:package.php',
    'config/mypackage.php' => 'config/:lc:package.php',
    'src/Facades/MyPackage.php' => 'src/Facades/:uc:package.php',
    'src/MyPackageServiceProvider.php' => 'src/:uc:packageServiceProvider.php',
    'resources/css/mypackage.scss' => 'resources/css/:lc:.scss',
    'resources/js/mypackage.js' => 'resources/js/:lc:.js',
    'resources/lang/en/mypackage.php' => 'resources/lang/en/:lc:.php',
    'resources/lang/ru/mypackage.php' => 'resources/lang/ru/:lc:.php',
    'resources/lang/uz/mypackage.php' => 'resources/lang/uz/:lc:.php',
];
