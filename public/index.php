<?php
use Itb\MainController;
use Itb\Member;

// do out basic setup
// ------------
require_once __DIR__ . '/../app/configDatabase.php';
require_once __DIR__ . '/../app/setup.php';


//$members = Member::getAll();
//var_dump($members);

// use our static controller() method...
$app->get('/',      \Itb\Utility::controller('Itb', 'main/index'));
$app->get('/index',      \Itb\Utility::controller('Itb', 'main/index'));
$app->get('/members', \Itb\Utility::controller('Itb', 'main/members'));
$app->get('/days', \Itb\Utility::controller('Itb', 'main/days'));
$app->post('/login', \Itb\Utility::controller('Itb', 'main/login'));
$app->get('/admin', \Itb\Utility::controller('Itb', 'main/adminPage'));
$app->get('/logout', \Itb\Utility::controller('Itb', 'main/logout'));

// 404 - Page not found
$app->error(function (\Exception $e, $code) use ($app) {
    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            return \Itb\MainController::error404($app, $message);

        default:
            $message = 'We are sorry, but something went terribly wrong.';
            return \Itb\MainController::error404($app, $message);
    }
});

// run Silex front controller
// ------------
$app->run();
