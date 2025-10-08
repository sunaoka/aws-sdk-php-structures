<?php

namespace Sunaoka\Aws\Structures\Transfer\TestIdentityProvider;

trait TestIdentityProviderTrait
{
    /**
     * @param TestIdentityProviderRequest $args
     * @return TestIdentityProviderResponse
     */
    public function testIdentityProvider(TestIdentityProviderRequest $args)
    {
        $result = parent::testIdentityProvider($args->toArray());
        return new TestIdentityProviderResponse($result->toArray());
    }
}
