<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetEventLogConfiguration;

trait GetEventLogConfigurationTrait
{
    /**
     * @param GetEventLogConfigurationRequest $args
     * @return GetEventLogConfigurationResponse
     */
    public function getEventLogConfiguration(GetEventLogConfigurationRequest $args)
    {
        $result = parent::getEventLogConfiguration($args->toArray());
        return new GetEventLogConfigurationResponse($result->toArray());
    }
}
