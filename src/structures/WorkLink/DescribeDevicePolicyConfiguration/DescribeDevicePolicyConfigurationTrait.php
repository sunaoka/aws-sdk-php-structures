<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeDevicePolicyConfiguration;

trait DescribeDevicePolicyConfigurationTrait
{
    /**
     * @param DescribeDevicePolicyConfigurationRequest $args
     * @return DescribeDevicePolicyConfigurationResponse
     */
    public function describeDevicePolicyConfiguration(DescribeDevicePolicyConfigurationRequest $args)
    {
        $result = parent::describeDevicePolicyConfiguration($args->toArray());
        return new DescribeDevicePolicyConfigurationResponse($result->toArray());
    }
}
