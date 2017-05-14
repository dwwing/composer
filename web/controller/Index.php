<?php
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;


class Index {
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function show() {
        return $this->view->make('index')->with("vision",'1.0');
    }


    /*
     * 输出验证码
     */
    public function code()
    {
        $builder = new CaptchaBuilder;
        $builder->build();
        header('Content-type: image/jpeg');
        $builder->output();
    }
}