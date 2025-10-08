<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteNotificationConfiguration;

trait DeleteNotificationConfigurationTrait
{
    /**
     * @param DeleteNotificationConfigurationRequest $args
     * @return void
     */
    public function deleteNotificationConfiguration(DeleteNotificationConfigurationRequest $args)
    {
        parent::deleteNotificationConfiguration($args->toArray());
    }
}
