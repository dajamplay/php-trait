<?php

namespace app;

use traits\HelloWorld;
use traits\Hi;

class App
{
    use HelloWorld, Hi;

    public function __construct()
    {
        echo 'Start<br>';
        $this->helloWorld();
        $this->hi();
    }
}