<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\RemoveNotificationChannel;

trait RemoveNotificationChannelTrait
{
    /**
     * @param RemoveNotificationChannelRequest $args
     * @return RemoveNotificationChannelResponse
     */
    public function removeNotificationChannel(RemoveNotificationChannelRequest $args)
    {
        $result = parent::removeNotificationChannel($args->toArray());
        return new RemoveNotificationChannelResponse($result->toArray());
    }
}
