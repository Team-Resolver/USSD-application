<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3aa48f42982a07ae5f2f0daf3e969994
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3aa48f42982a07ae5f2f0daf3e969994::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3aa48f42982a07ae5f2f0daf3e969994::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3aa48f42982a07ae5f2f0daf3e969994::$classMap;

        }, null, ClassLoader::class);
    }
}
