<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42932ec57adf583f79fd1ada969f26f3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit42932ec57adf583f79fd1ada969f26f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42932ec57adf583f79fd1ada969f26f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42932ec57adf583f79fd1ada969f26f3::$classMap;

        }, null, ClassLoader::class);
    }
}
