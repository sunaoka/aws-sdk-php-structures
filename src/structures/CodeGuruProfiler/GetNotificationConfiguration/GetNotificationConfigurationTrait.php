<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetNotificationConfiguration;

trait GetNotificationConfigurationTrait
{
    /**
     * @param GetNotificationConfigurationRequest $args
     * @return GetNotificationConfigurationResponse
     */
    public function getNotificationConfiguration(GetNotificationConfigurationRequest $args)
    {
        $result = parent::getNotificationConfiguration($args->toArray());
        return new GetNotificationConfigurationResponse($result->toArray());
    }
}
