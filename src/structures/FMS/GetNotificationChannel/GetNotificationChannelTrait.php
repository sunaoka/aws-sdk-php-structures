<?php

namespace Sunaoka\Aws\Structures\FMS\GetNotificationChannel;

trait GetNotificationChannelTrait
{
    /**
     * @param GetNotificationChannelRequest $args
     * @return GetNotificationChannelResponse
     */
    public function getNotificationChannel(GetNotificationChannelRequest $args)
    {
        $result = parent::getNotificationChannel($args->toArray());
        return new GetNotificationChannelResponse($result->toArray());
    }
}
