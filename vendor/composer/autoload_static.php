<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a3b1a54bed37cb393a039994ec7dd8b
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Innowaysit\\CurrencyFormatter\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Innowaysit\\CurrencyFormatter\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a3b1a54bed37cb393a039994ec7dd8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a3b1a54bed37cb393a039994ec7dd8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a3b1a54bed37cb393a039994ec7dd8b::$classMap;

        }, null, ClassLoader::class);
    }
}