<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeEmailMonitoringConfiguration;

trait DescribeEmailMonitoringConfigurationTrait
{
    /**
     * @param DescribeEmailMonitoringConfigurationRequest $args
     * @return DescribeEmailMonitoringConfigurationResponse
     */
    public function describeEmailMonitoringConfiguration(DescribeEmailMonitoringConfigurationRequest $args)
    {
        $result = parent::describeEmailMonitoringConfiguration($args->toArray());
        return new DescribeEmailMonitoringConfigurationResponse($result->toArray());
    }
}
