<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateNotificationConfiguration;

trait UpdateNotificationConfigurationTrait
{
    /**
     * @param UpdateNotificationConfigurationRequest $args
     * @return void
     */
    public function updateNotificationConfiguration(UpdateNotificationConfigurationRequest $args)
    {
        parent::updateNotificationConfiguration($args->toArray());
    }
}
