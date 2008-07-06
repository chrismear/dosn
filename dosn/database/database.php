<?php
class Dosn_Database
{
    public static function getDatabase()
    {
        $databasePath = 'sqlite:'.Dosn::getDosnRoot().'/data/dosnstore';
        echo $databasePath;
        return new PDO($databasePath);
    }
}
?>
