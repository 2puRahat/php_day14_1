<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09e87c40ac84d836ee44b54776086255
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit09e87c40ac84d836ee44b54776086255::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09e87c40ac84d836ee44b54776086255::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09e87c40ac84d836ee44b54776086255::$classMap;

        }, null, ClassLoader::class);
    }
}
