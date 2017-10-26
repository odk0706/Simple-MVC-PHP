<?php

namespace mvcsystem\baseclasses;


use mvcsystem\RequestDirector;

interface ControllerInterface
{
    public function __construct(RequestDirector $requestDirector);
    public function index();
}