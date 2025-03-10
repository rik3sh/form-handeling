<?php

require_once 'User.php';
require_once 'Role.php';

$user = new User();

$role = new Role("Rupesh");
echo Role::getManagementName();
