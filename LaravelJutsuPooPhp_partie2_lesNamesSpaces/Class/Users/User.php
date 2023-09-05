<?php

namespace Class\Users;

class User 
{

    public int $id;

    public function __construct()
    {
        $this->id  = rand();
    }
}