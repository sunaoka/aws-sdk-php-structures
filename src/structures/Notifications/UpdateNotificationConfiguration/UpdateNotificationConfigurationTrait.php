<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateNotificationConfiguration;

trait UpdateNotificationConfigurationTrait
{
    /**
     * @param UpdateNotificationConfigurationRequest $args
     * @return UpdateNotificationConfigurationResponse
     */
    public function updateNotificationConfiguration(UpdateNotificationConfigurationRequest $args)
    {
        $result = parent::updateNotificationConfiguration($args->toArray());
        return new UpdateNotificationConfigurationResponse($result->toArray());
    }
}
