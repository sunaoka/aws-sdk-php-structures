<?php

namespace Sunaoka\Aws\Structures\FMS\PutNotificationChannel;

trait PutNotificationChannelTrait
{
    /**
     * @param PutNotificationChannelRequest $args
     * @return void
     */
    public function putNotificationChannel(PutNotificationChannelRequest $args)
    {
        parent::putNotificationChannel($args->toArray());
    }
}
