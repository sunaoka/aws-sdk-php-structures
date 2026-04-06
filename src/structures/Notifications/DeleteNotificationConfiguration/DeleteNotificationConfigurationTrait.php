<?php

namespace Sunaoka\Aws\Structures\Notifications\DeleteNotificationConfiguration;

trait DeleteNotificationConfigurationTrait
{
    /**
     * @param DeleteNotificationConfigurationRequest $args
     * @return DeleteNotificationConfigurationResponse
     */
    public function deleteNotificationConfiguration(DeleteNotificationConfigurationRequest $args)
    {
        $result = parent::deleteNotificationConfiguration($args->toArray());
        return new DeleteNotificationConfigurationResponse($result->toArray());
    }
}
