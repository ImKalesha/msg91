<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86c72b8c6f625ef860da0f2f0cbd0fa4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abackdev\\User\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abackdev\\User\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86c72b8c6f625ef860da0f2f0cbd0fa4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86c72b8c6f625ef860da0f2f0cbd0fa4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
