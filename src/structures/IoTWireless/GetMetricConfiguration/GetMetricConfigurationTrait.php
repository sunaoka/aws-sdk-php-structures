<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetricConfiguration;

trait GetMetricConfigurationTrait
{
    /**
     * @param GetMetricConfigurationRequest $args
     * @return GetMetricConfigurationResponse
     */
    public function getMetricConfiguration(GetMetricConfigurationRequest $args)
    {
        $result = parent::getMetricConfiguration($args->toArray());
        return new GetMetricConfigurationResponse($result->toArray());
    }
}
