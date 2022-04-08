<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dd2c6e4cae47cf18c8822872a8e5f9d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cowsayphp\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cowsayphp\\' => 
        array (
            0 => __DIR__ . '/..' . '/alrik11es/cowsayphp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dd2c6e4cae47cf18c8822872a8e5f9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dd2c6e4cae47cf18c8822872a8e5f9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8dd2c6e4cae47cf18c8822872a8e5f9d::$classMap;

        }, null, ClassLoader::class);
    }
}
