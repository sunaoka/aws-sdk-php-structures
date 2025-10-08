<?php

namespace Sunaoka\Aws\Structures\CloudFront\TestFunction;

trait TestFunctionTrait
{
    /**
     * @param TestFunctionRequest $args
     * @return TestFunctionResponse
     */
    public function testFunction(TestFunctionRequest $args)
    {
        $result = parent::testFunction($args->toArray());
        return new TestFunctionResponse($result->toArray());
    }
}
