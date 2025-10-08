<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeIdentityProvider;

trait DescribeIdentityProviderTrait
{
    /**
     * @param DescribeIdentityProviderRequest $args
     * @return DescribeIdentityProviderResponse
     */
    public function describeIdentityProvider(DescribeIdentityProviderRequest $args)
    {
        $result = parent::describeIdentityProvider($args->toArray());
        return new DescribeIdentityProviderResponse($result->toArray());
    }
}
