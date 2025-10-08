<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\AddNotificationChannel;

trait AddNotificationChannelTrait
{
    /**
     * @param AddNotificationChannelRequest $args
     * @return AddNotificationChannelResponse
     */
    public function addNotificationChannel(AddNotificationChannelRequest $args)
    {
        $result = parent::addNotificationChannel($args->toArray());
        return new AddNotificationChannelResponse($result->toArray());
    }
}
