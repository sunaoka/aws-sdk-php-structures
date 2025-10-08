<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateNotificationConfiguration;

trait CreateNotificationConfigurationTrait
{
    /**
     * @param CreateNotificationConfigurationRequest $args
     * @return CreateNotificationConfigurationResponse
     */
    public function createNotificationConfiguration(CreateNotificationConfigurationRequest $args)
    {
        $result = parent::createNotificationConfiguration($args->toArray());
        return new CreateNotificationConfigurationResponse($result->toArray());
    }
}
