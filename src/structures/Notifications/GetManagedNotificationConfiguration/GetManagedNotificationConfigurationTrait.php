<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationConfiguration;

trait GetManagedNotificationConfigurationTrait
{
    /**
     * @param GetManagedNotificationConfigurationRequest $args
     * @return GetManagedNotificationConfigurationResponse
     */
    public function getManagedNotificationConfiguration(GetManagedNotificationConfigurationRequest $args)
    {
        $result = parent::getManagedNotificationConfiguration($args->toArray());
        return new GetManagedNotificationConfigurationResponse($result->toArray());
    }
}
