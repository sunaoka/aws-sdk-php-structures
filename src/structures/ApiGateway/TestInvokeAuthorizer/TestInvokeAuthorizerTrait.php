<?php

namespace Sunaoka\Aws\Structures\ApiGateway\TestInvokeAuthorizer;

trait TestInvokeAuthorizerTrait
{
    /**
     * @param TestInvokeAuthorizerRequest $args
     * @return TestInvokeAuthorizerResponse
     */
    public function testInvokeAuthorizer(TestInvokeAuthorizerRequest $args)
    {
        $result = parent::testInvokeAuthorizer($args->toArray());
        return new TestInvokeAuthorizerResponse($result->toArray());
    }
}
