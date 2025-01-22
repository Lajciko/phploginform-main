<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once('class/User.php');

session_start(); 
use Steampixel\Route;
use Smarty\Smarty;

$s = new Smarty();
$s->setTemplateDir('templates');
$s->setCompileDir('templates_c');
$s->setCompileDir('cache');
$s->setCompileDir('configs');

Route::add('/', function() {
    global $s;
    $isUserLogged = isset($_SESSION['user']);
    if ($isUserLogged) {
        $s->assign('isUserLogged', true);
        $s->assign('', $_SESSION['user']->getEmail());
    } else {
        $s->assign('isUserLogged', false);
    }
    $s->display('index.php');
});
Route::add('/login', function() {
    include('templates/login.php');
});
Route::add('/login', function() {
    include('templates/login.php');
}, 'post');    
Route::add('/register', function() {
    include('templates/register.php');
});
Route::add('/register', function() {
    include('templates/register.php');
}, 'post');    
Route::add('/logout', function() {
    //include('templates/logout.php');
    global $s;
    $isUserLogged = isset($_SESSION['user']);
    if ($isUserLogged) {
        session_destroy();
        $s->assign('Message', 'Zostałeś wylogowany');
    }
    $s->display('logout.tpl');
});

Route::run('/phploginform');
?>