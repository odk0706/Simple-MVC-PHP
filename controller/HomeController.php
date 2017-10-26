<?php

namespace controller;


use mvcsystem\baseclasses\Controller;
use mvcsystem\RequestDirector;

class HomeController extends Controller
{
    public function __construct(RequestDirector $requestDirector)
    {
        parent::__construct($requestDirector);
    }

    public function index(){
        $this->returnView();
    }

    public function features(){
        $this->returnView();
    }

    public function docs(){
        $this->returnView();
    }
}