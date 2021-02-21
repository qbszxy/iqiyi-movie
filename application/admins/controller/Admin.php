<?php
namespace app\admins\controller;
use think\Controller;
use Util\data\Sysdb;

/**
 * Class Admin
 * 管理员管理
 */
class Admin extends BaseAdmin{
    // 管理员列表
    public function index(){
        $data['lists'] = $this->db->table('admins')->lists();
        $this->assign('data', $data);
        return $this->fetch();
    }

    // 添加管理员
    public function add(){
        return $this->fetch();
    }
}