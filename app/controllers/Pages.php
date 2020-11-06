<?php
class Pages  extends Controller {

    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }
    public function index()
    {
        $data = ['title'=>'welcome To Brace micro MVC FrameWork'];
        $this->view('pages/index',$data);
    }
    public function about()
    {
        $data = ['title'=>'about'];
        $this->view('pages/about',$data);
    }


}