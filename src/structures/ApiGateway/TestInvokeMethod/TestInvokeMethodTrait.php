<?php

namespace Sunaoka\Aws\Structures\ApiGateway\TestInvokeMethod;

trait TestInvokeMethodTrait
{
    /**
     * @param TestInvokeMethodRequest $args
     * @return TestInvokeMethodResponse
     */
    public function testInvokeMethod(TestInvokeMethodRequest $args)
    {
        $result = parent::testInvokeMethod($args->toArray());
        return new TestInvokeMethodResponse($result->toArray());
    }
}
