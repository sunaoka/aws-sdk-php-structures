<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations;

trait ListEventConfigurationsTrait
{
    /**
     * @param ListEventConfigurationsRequest $args
     * @return ListEventConfigurationsResponse
     */
    public function listEventConfigurations(ListEventConfigurationsRequest $args)
    {
        $result = parent::listEventConfigurations($args->toArray());
        return new ListEventConfigurationsResponse($result->toArray());
    }
}
