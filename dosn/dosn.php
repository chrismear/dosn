<?php
class Dosn
{
    protected static $dosnRoot;

    public static function setDosnRoot($newDosnRoot)
    {
        self::$dosnRoot = $newDosnRoot;
    }

    public static function getDosnRoot()
    {
        return self::$dosnRoot;
    }
}
?>
