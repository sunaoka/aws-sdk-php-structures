<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeIdentityProviderConfig;

trait DescribeIdentityProviderConfigTrait
{
    /**
     * @param DescribeIdentityProviderConfigRequest $args
     * @return DescribeIdentityProviderConfigResponse
     */
    public function describeIdentityProviderConfig(DescribeIdentityProviderConfigRequest $args)
    {
        $result = parent::describeIdentityProviderConfig($args->toArray());
        return new DescribeIdentityProviderConfigResponse($result->toArray());
    }
}
