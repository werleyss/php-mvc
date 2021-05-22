<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit956699774bcadc55c743df2459507501
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit956699774bcadc55c743df2459507501::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit956699774bcadc55c743df2459507501::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit956699774bcadc55c743df2459507501::$classMap;

        }, null, ClassLoader::class);
    }
}