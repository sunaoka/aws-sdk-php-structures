<?php

namespace Sunaoka\Aws\Structures\CloudFront\TestConnectionFunction;

trait TestConnectionFunctionTrait
{
    /**
     * @param TestConnectionFunctionRequest $args
     * @return TestConnectionFunctionResponse
     */
    public function testConnectionFunction(TestConnectionFunctionRequest $args)
    {
        $result = parent::testConnectionFunction($args->toArray());
        return new TestConnectionFunctionResponse($result->toArray());
    }
}
