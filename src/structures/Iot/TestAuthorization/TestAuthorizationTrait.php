<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization;

trait TestAuthorizationTrait
{
    /**
     * @param TestAuthorizationRequest $args
     * @return TestAuthorizationResponse
     */
    public function testAuthorization(TestAuthorizationRequest $args)
    {
        $result = parent::testAuthorization($args->toArray());
        return new TestAuthorizationResponse($result->toArray());
    }
}
