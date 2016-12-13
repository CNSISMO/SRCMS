<?php

/**
 * @Author: Zhou Yuyang <1009465756@qq.com> 10:28 2016/12/03
 * @Copyright 2015-2020 SISMO
 * @Project homepage https://github.com/CNSISMO
 * @Version 1.8
 */

namespace Home\Controller;

use Think\Controller;

class GiftController extends Controller{

    public function index(){
		$gift = M('links')->select();
		$tmodel= M('setting');
		$title = $tmodel->where('id=1')->select();
        $this->assign('title', $title);
        $this->assign('gift',$gift);
        $this->display();
    }
}
