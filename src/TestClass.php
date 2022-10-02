<?php

namespace HongXunPan\TestComposer;

class TestClass
{
    public function testFunction()
    {
        return __FUNCTION__;
    }

    public static function testFunction1()
    {
        return __METHOD__;
    }
}
