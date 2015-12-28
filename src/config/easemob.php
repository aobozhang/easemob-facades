<?php

//默认返回官网提供的测试账号；配置.env以使用自己的账号或者直接修改；
return [
    'org_name'      => env('EASEMOB_ORG_NAME', 'easemob-playground'),
    'app_name'      => env('EASEMOB_APP_NAME', 'test1'),
    'client_id'     => env('EASEMOB_CLIENT_ID', 'YXA6wDs-MARqEeSO0VcBzaqg5A'),
    'client_secret' => env('EASEMOB_CLIENT_SECRET', 'YXA6JOMWlLap_YbI_ucz77j-4-mI0JA'),
];
