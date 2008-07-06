<?php
require_once 'dosn/dosn.php';
Dosn::setDosnRoot(dirname(__FILE__));

require_once 'dosn/database/database.php';

$db = Dosn_Database::getDatabase();

$db->beginTransaction();
$db->exec(<<<_SQL_
CREATE TABLE zodiac (
  id INT UNSIGNED NOT NULL,
  sign CHAR(11),
  symbol CHAR(13),
  planet CHAR(7),
  element CHAR(5),
  start_month TINYINT,
  start_day TINYINT,
  end_month TINYINT,
  end_day TINYINT,
  PRIMARY KEY(id)
)
_SQL_
);
$db->commit();
?>
