<?php
namespace app\admins\controller;
use think\Controller;
use think\Request;
use Util\data\Sysdb;

class BaseAdmin extends Controller
{
    public function __construct(){
        parent::__construct();
        // 未登录的用户不允许访问
        $this->_admin = session('admin');
        if(!$this->_admin){
            header('Location: /admins.php/admins/Account/login');
            exit;
        }
        // 判断用户是否有权限

    }
}