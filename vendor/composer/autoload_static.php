<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b6c6ca989e904322075f55aa908248b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Two\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Two\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b6c6ca989e904322075f55aa908248b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b6c6ca989e904322075f55aa908248b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b6c6ca989e904322075f55aa908248b::$classMap;

        }, null, ClassLoader::class);
    }
}
