<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeLoggingConfiguration;

trait DescribeLoggingConfigurationTrait
{
    /**
     * @param DescribeLoggingConfigurationRequest $args
     * @return DescribeLoggingConfigurationResponse
     */
    public function describeLoggingConfiguration(DescribeLoggingConfigurationRequest $args)
    {
        $result = parent::describeLoggingConfiguration($args->toArray());
        return new DescribeLoggingConfigurationResponse($result->toArray());
    }
}
