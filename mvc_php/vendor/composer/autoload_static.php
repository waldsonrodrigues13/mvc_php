<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd30fe564215cc64082312ffa61b75900
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd30fe564215cc64082312ffa61b75900::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd30fe564215cc64082312ffa61b75900::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd30fe564215cc64082312ffa61b75900::$classMap;

        }, null, ClassLoader::class);
    }
}
