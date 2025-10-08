<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeQueryLoggingConfiguration;

trait DescribeQueryLoggingConfigurationTrait
{
    /**
     * @param DescribeQueryLoggingConfigurationRequest $args
     * @return DescribeQueryLoggingConfigurationResponse
     */
    public function describeQueryLoggingConfiguration(DescribeQueryLoggingConfigurationRequest $args)
    {
        $result = parent::describeQueryLoggingConfiguration($args->toArray());
        return new DescribeQueryLoggingConfigurationResponse($result->toArray());
    }
}
