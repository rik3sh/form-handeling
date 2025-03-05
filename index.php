<?php

require_once 'User.php';
require_once 'Role.php';

$user = new User();
// echo $user->index();

$role = new Role("Rupesh");
echo Role::getManagementName();

// echo $role->getManagementName();




// echo $role->getRole();
// echo $role->index();




