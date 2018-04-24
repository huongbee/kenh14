<?php

$page = isset($_GET['page'])? $_GET['page'] : 'home';

require_once 'controller/HomeController.php';
require_once 'api/api.php';

$c = new HomeController($page,$api);
$c->getPage()
?>