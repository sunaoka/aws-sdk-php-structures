<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateEventLogConfiguration;

trait CreateEventLogConfigurationTrait
{
    /**
     * @param CreateEventLogConfigurationRequest $args
     * @return CreateEventLogConfigurationResponse
     */
    public function createEventLogConfiguration(CreateEventLogConfigurationRequest $args)
    {
        $result = parent::createEventLogConfiguration($args->toArray());
        return new CreateEventLogConfigurationResponse($result->toArray());
    }
}
