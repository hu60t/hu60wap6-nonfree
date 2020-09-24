<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc842ba03c53028f9a28dd4976fdb3c2b
{
    public static $prefixLengthsPsr4 = array (
        'x' => 
        array (
            'xingwenge\\canal_php\\' => 20,
        ),
        'S' => 
        array (
            'Socket\\Raw\\' => 11,
        ),
        'G' => 
        array (
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
            'GPBMetadata\\' => 12,
        ),
        'C' => 
        array (
            'Com\\Alibaba\\Otter\\Canal\\Protocol\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'xingwenge\\canal_php\\' => 
        array (
            0 => __DIR__ . '/..' . '/xingwenge/canal_php/src',
        ),
        'Socket\\Raw\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/socket-raw/src',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
        'GPBMetadata\\' => 
        array (
            0 => __DIR__ . '/..' . '/xingwenge/canal_php/src/protocol/GPBMetadata',
        ),
        'Com\\Alibaba\\Otter\\Canal\\Protocol\\' => 
        array (
            0 => __DIR__ . '/..' . '/xingwenge/canal_php/src/protocol/Com/Alibaba/Otter/Canal/Protocol',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc842ba03c53028f9a28dd4976fdb3c2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc842ba03c53028f9a28dd4976fdb3c2b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}