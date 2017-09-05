<?php

header('content-type:text/html;charset=utf-8');
use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
    echo "成功！";
    print_r(starts_with('with', 'with'));
});


Macaw::$error_callback = function () {
    throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::get('', 'HomeController@home');
Macaw::dispatch();
