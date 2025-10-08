<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstanceAccessControlAttributeConfiguration;

trait DescribeInstanceAccessControlAttributeConfigurationTrait
{
    /**
     * @param DescribeInstanceAccessControlAttributeConfigurationRequest $args
     * @return DescribeInstanceAccessControlAttributeConfigurationResponse
     */
    public function describeInstanceAccessControlAttributeConfiguration(
        DescribeInstanceAccessControlAttributeConfigurationRequest $args,
    ) {
        $result = parent::describeInstanceAccessControlAttributeConfiguration($args->toArray());
        return new DescribeInstanceAccessControlAttributeConfigurationResponse($result->toArray());
    }
}
