<?php

namespace Sunaoka\Aws\Structures\Connect\CreateNotification;

trait CreateNotificationTrait
{
    /**
     * @param CreateNotificationRequest $args
     * @return CreateNotificationResponse
     */
    public function createNotification(CreateNotificationRequest $args)
    {
        $result = parent::createNotification($args->toArray());
        return new CreateNotificationResponse($result->toArray());
    }
}
