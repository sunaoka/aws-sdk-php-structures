<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPositionConfigurations;

trait ListPositionConfigurationsTrait
{
    /**
     * @param ListPositionConfigurationsRequest $args
     * @return ListPositionConfigurationsResponse
     */
    public function listPositionConfigurations(ListPositionConfigurationsRequest $args)
    {
        $result = parent::listPositionConfigurations($args->toArray());
        return new ListPositionConfigurationsResponse($result->toArray());
    }
}
