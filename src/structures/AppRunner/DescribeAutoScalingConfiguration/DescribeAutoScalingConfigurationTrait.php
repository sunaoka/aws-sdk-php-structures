<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeAutoScalingConfiguration;

trait DescribeAutoScalingConfigurationTrait
{
    /**
     * @param DescribeAutoScalingConfigurationRequest $args
     * @return DescribeAutoScalingConfigurationResponse
     */
    public function describeAutoScalingConfiguration(DescribeAutoScalingConfigurationRequest $args)
    {
        $result = parent::describeAutoScalingConfiguration($args->toArray());
        return new DescribeAutoScalingConfigurationResponse($result->toArray());
    }
}
