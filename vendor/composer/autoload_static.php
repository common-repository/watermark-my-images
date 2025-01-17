<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaeb7e483ee53c7f43e235a7b2c47a2fb
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WatermarkMyImages\\Tests\\' => 24,
            'WatermarkMyImages\\' => 18,
        ),
        'I' => 
        array (
            'Imagine\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WatermarkMyImages\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'WatermarkMyImages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
        'Imagine\\' => 
        array (
            0 => __DIR__ . '/..' . '/imagine/imagine/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaeb7e483ee53c7f43e235a7b2c47a2fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaeb7e483ee53c7f43e235a7b2c47a2fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaeb7e483ee53c7f43e235a7b2c47a2fb::$classMap;

        }, null, ClassLoader::class);
    }
}
