<?php

trait SingletonTrait
{
    private static ?self $theInstance = null;

    private function __construct() {}

    public static function getInstance(): self
    {
        if (!self::$theInstance) {
            self::$theInstance = new self();
        }
        return self::$theInstance;
    }
}
