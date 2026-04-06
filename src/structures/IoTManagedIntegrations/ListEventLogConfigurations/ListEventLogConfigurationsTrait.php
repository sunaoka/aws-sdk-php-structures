<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListEventLogConfigurations;

trait ListEventLogConfigurationsTrait
{
    /**
     * @param ListEventLogConfigurationsRequest $args
     * @return ListEventLogConfigurationsResponse
     */
    public function listEventLogConfigurations(ListEventLogConfigurationsRequest $args)
    {
        $result = parent::listEventLogConfigurations($args->toArray());
        return new ListEventLogConfigurationsResponse($result->toArray());
    }
}
