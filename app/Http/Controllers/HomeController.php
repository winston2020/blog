<?php

namespace App\Http\Controllers;

use App\img_url;
use App\title;
use App\type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $where = [];
        $title = title::where($where)->orderBy('id','desc')->take(40)->get();//获取最新的40条所有新闻
        return view('index',compact('title'));

    }

    public function fan($account){
        $typeid = type::where(['ename'=>$account])->value('id');
        $where = ['typeid'=>$typeid];
        $typetitle = title::where($where)->orderBy('id','desc')->take(40)->get();//获取最新的40条类型对应的新闻
        return view('fan',compact('typetitle'));
    }

    












}
