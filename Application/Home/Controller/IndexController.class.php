<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {



    // 初始化方法
    public function _initialize(){

    }



    //blog 个人简历页面
    public function index(){

        $tag_info = M('tag');

        $res = $tag_info->select();


        $encode_str = array();

        //拼装标签数据
        foreach($res as $k => $val){
            $encode_str[$k]['label'] = $val['tag_name'];
            $encode_str[$k]['url'] = '#';
            $encode_str[$k]['target'] = '_top';
        }

        $this->assign('encode_str',json_encode($encode_str));

        $this->display();
    }


    //博客首页
    public function hello(){


        $this->display();

    }


    //我的视频
    public function live(){

    }


    //我的笔记
    public function note(){

    }


    //我的相册
    public function album(){

    }







    public function hello2(){
        echo 'hello , '.$this->hello3().'. this is private function';
        exit;
    }

    private function hello3(){

        return 'tom';
    }
}