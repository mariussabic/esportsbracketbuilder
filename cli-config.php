<?php
/**
 * Created by PhpStorm.
 * User: Marius Sabic
 * Date: 04.03.2019
 * Time: 11:35
 */
// cli-config.php
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
