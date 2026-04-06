<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeIdentityProviderConfiguration;

trait DescribeIdentityProviderConfigurationTrait
{
    /**
     * @param DescribeIdentityProviderConfigurationRequest $args
     * @return DescribeIdentityProviderConfigurationResponse
     */
    public function describeIdentityProviderConfiguration(DescribeIdentityProviderConfigurationRequest $args)
    {
        $result = parent::describeIdentityProviderConfiguration($args->toArray());
        return new DescribeIdentityProviderConfigurationResponse($result->toArray());
    }
}
