<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a1779bcf9b90d37678409df188b8e64
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Todo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Todo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a1779bcf9b90d37678409df188b8e64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a1779bcf9b90d37678409df188b8e64::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6a1779bcf9b90d37678409df188b8e64::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
