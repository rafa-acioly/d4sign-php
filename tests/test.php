<?php

require_once __DIR__ . '/../vendor/autoload.php';

use D4sign\Service;
use D4sign\Client;

var_dump(new Service(new Client()));

