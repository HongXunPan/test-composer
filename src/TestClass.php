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
}
