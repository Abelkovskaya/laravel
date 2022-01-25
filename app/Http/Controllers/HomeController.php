<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
public function index(){
return <<<php
<h4>Приветствую тебя на тестовом сайте по изучению Laravel!</h4>
 
<a href = '/'>Переход на admin страницу</a>
php;
}
}