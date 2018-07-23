<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
    	p("wwwwwwwwwwww");
    }
    function test(){
    	return $this->fetch('./test');
    }
}
