<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite337a71a1dc5ada3600a9d7d24b0a7d8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite337a71a1dc5ada3600a9d7d24b0a7d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite337a71a1dc5ada3600a9d7d24b0a7d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite337a71a1dc5ada3600a9d7d24b0a7d8::$classMap;

        }, null, ClassLoader::class);
    }
}
