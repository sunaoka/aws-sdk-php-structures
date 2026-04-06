<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMetricConfiguration;

trait UpdateMetricConfigurationTrait
{
    /**
     * @param UpdateMetricConfigurationRequest $args
     * @return UpdateMetricConfigurationResponse
     */
    public function updateMetricConfiguration(UpdateMetricConfigurationRequest $args)
    {
        $result = parent::updateMetricConfiguration($args->toArray());
        return new UpdateMetricConfigurationResponse($result->toArray());
    }
}
