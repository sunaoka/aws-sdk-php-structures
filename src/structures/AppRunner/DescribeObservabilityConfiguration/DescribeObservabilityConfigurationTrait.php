<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeObservabilityConfiguration;

trait DescribeObservabilityConfigurationTrait
{
    /**
     * @param DescribeObservabilityConfigurationRequest $args
     * @return DescribeObservabilityConfigurationResponse
     */
    public function describeObservabilityConfiguration(DescribeObservabilityConfigurationRequest $args)
    {
        $result = parent::describeObservabilityConfiguration($args->toArray());
        return new DescribeObservabilityConfigurationResponse($result->toArray());
    }
}
