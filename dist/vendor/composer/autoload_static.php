<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a4c17a7bdb8e435609c01ca9f928e88
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a4c17a7bdb8e435609c01ca9f928e88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a4c17a7bdb8e435609c01ca9f928e88::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a4c17a7bdb8e435609c01ca9f928e88::$classMap;

        }, null, ClassLoader::class);
    }
}