<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdbbdfb3377cb5a0f69132d18f3d833e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdbbdfb3377cb5a0f69132d18f3d833e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdbbdfb3377cb5a0f69132d18f3d833e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbdbbdfb3377cb5a0f69132d18f3d833e::$classMap;

        }, null, ClassLoader::class);
    }
}
