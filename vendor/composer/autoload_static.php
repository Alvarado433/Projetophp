<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c602ab7f937d3980f4ab441ee80b972
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c602ab7f937d3980f4ab441ee80b972::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c602ab7f937d3980f4ab441ee80b972::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c602ab7f937d3980f4ab441ee80b972::$classMap;

        }, null, ClassLoader::class);
    }
}
