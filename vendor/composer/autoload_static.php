<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28ad10bb3cb94247ef00e268aada3b68
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Step\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Step\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28ad10bb3cb94247ef00e268aada3b68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28ad10bb3cb94247ef00e268aada3b68::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
