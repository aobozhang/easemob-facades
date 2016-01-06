<?php
namespace Aobo\Easemob;
require("EasemobClass.php");

$option = [
    'org_name'      => 'easemob-playground',
    'app_name'      => 'test1',
    'client_id'     => 'YXA6wDs-MARqEeSO0VcBzaqg5A',
    'client_secret' => 'YXA6JOMWlLap_YbI_ucz77j-4-mI0JA',
];

$easemob = new EasemobClass($option);

var_dump($easemob->showFriends('1234'));
