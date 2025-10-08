<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutNotificationConfiguration;

trait PutNotificationConfigurationTrait
{
    /**
     * @param PutNotificationConfigurationRequest $args
     * @return void
     */
    public function putNotificationConfiguration(PutNotificationConfigurationRequest $args)
    {
        parent::putNotificationConfiguration($args->toArray());
    }
}
