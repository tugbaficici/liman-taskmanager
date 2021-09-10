<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4836bd09457c1fd10f49aa85309156d5
{
    public static $files = array (
        '74807a847f6dfd1c6696de188a5cb899' => __DIR__ . '/../..' . '/app/Helpers/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Icewind\\Streams\\' => 16,
            'Icewind\\SMB\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Icewind\\Streams\\' => 
        array (
            0 => __DIR__ . '/..' . '/icewind/streams/src',
        ),
        'Icewind\\SMB\\' => 
        array (
            0 => __DIR__ . '/..' . '/icewind/smb/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\App' => __DIR__ . '/../..' . '/app/App.php',
        'App\\Controllers\\FolderManagerController' => __DIR__ . '/../..' . '/app/Controllers/FolderManagerController.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'App\\Controllers\\HostnameController' => __DIR__ . '/../..' . '/app/Controllers/HostnameController.php',
        'App\\Controllers\\RunScriptController' => __DIR__ . '/../..' . '/app/Controllers/RunScriptController.php',
        'App\\Controllers\\SystemInfoController' => __DIR__ . '/../..' . '/app/Controllers/SystemInfoController.php',
        'App\\Controllers\\TaskController' => __DIR__ . '/../..' . '/app/Controllers/TaskController.php',
        'App\\Controllers\\TaskManagerController' => __DIR__ . '/../..' . '/app/Controllers/TaskManagerController.php',
        'App\\Controllers\\TaskViewController' => __DIR__ . '/../..' . '/app/Controllers/TaskViewController.php',
        'App\\Tasks\\Example' => __DIR__ . '/../..' . '/app/Tasks/Example.php',
        'App\\Tasks\\Lshw' => __DIR__ . '/../..' . '/app/Tasks/Lshw.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4836bd09457c1fd10f49aa85309156d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4836bd09457c1fd10f49aa85309156d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4836bd09457c1fd10f49aa85309156d5::$classMap;

        }, null, ClassLoader::class);
    }
}
