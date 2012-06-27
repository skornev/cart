<?php

namespace Cart;

class Cart_Storage_Driver_Session implements Cart_Storage_Interface
{
    public static function init()
    {
        @session_start();
    }

    public static function restore($storage_key)
    {
        static::init();

        return isset($_SESSION[$storage_key]) ? $_SESSION[$storage_key] : null;

    }

    public static function save($storage_key, $data)
    {
        static::init();

        $_SESSION[$storage_key] = $data;
    }

    public static function clear($storage_key)
    {
        static::init();

        unset($_SESSION[$storage_key]);
    }
}