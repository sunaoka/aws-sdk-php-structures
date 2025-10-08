<?php

namespace Sunaoka\Aws\Structures\FMS\DeleteNotificationChannel;

trait DeleteNotificationChannelTrait
{
    /**
     * @param DeleteNotificationChannelRequest $args
     * @return void
     */
    public function deleteNotificationChannel(DeleteNotificationChannelRequest $args)
    {
        parent::deleteNotificationChannel($args->toArray());
    }
}
