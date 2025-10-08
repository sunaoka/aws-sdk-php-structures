<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraperLoggingConfiguration;

trait DescribeScraperLoggingConfigurationTrait
{
    /**
     * @param DescribeScraperLoggingConfigurationRequest $args
     * @return DescribeScraperLoggingConfigurationResponse
     */
    public function describeScraperLoggingConfiguration(DescribeScraperLoggingConfigurationRequest $args)
    {
        $result = parent::describeScraperLoggingConfiguration($args->toArray());
        return new DescribeScraperLoggingConfigurationResponse($result->toArray());
    }
}
