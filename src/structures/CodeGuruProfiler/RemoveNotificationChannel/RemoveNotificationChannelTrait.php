<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\RemoveNotificationChannel;

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
