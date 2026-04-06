<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePushNotificationRegistration;

trait CreatePushNotificationRegistrationTrait
{
    /**
     * @param CreatePushNotificationRegistrationRequest $args
     * @return CreatePushNotificationRegistrationResponse
     */
    public function createPushNotificationRegistration(CreatePushNotificationRegistrationRequest $args)
    {
        $result = parent::createPushNotificationRegistration($args->toArray());
        return new CreatePushNotificationRegistrationResponse($result->toArray());
    }
}
