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

    public function testFunctionParam(...$param)
    {
        return [
            'function' => __FUNCTION__,
            'method' => __METHOD__,
            'param' => $param
        ];
    }
    //0.0.1 end

    //0.0.2 start
    public function newFunction002()
    {
        //
        return '0.0.2';
    }
}
