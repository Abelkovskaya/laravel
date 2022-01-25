<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class IndexController extends Controller
{
public function index(){
return <<<php
<h4>Если ты админ, то введи свои данные:</h4>
<p>Логин: <input name="login" type="text"></p>
<p>Пароль: <input name="pass" type="text"></p>
<p><input name="go" type="submit" value="Войти"></p>
<a href = '/'>Переход на главную страницу</a>
php;
}
}
