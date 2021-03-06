<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0f22a21d11e7abee93c72c4a5ea6b04
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'oop_project\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'oop_project\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite0f22a21d11e7abee93c72c4a5ea6b04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0f22a21d11e7abee93c72c4a5ea6b04::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0f22a21d11e7abee93c72c4a5ea6b04::$classMap;

        }, null, ClassLoader::class);
    }
}
