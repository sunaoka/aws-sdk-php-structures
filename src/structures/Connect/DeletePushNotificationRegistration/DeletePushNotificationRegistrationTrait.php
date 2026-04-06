<?php

namespace Sunaoka\Aws\Structures\Connect\DeletePushNotificationRegistration;

trait DeletePushNotificationRegistrationTrait
{
    /**
     * @param DeletePushNotificationRegistrationRequest $args
     * @return DeletePushNotificationRegistrationResponse
     */
    public function deletePushNotificationRegistration(DeletePushNotificationRegistrationRequest $args)
    {
        $result = parent::deletePushNotificationRegistration($args->toArray());
        return new DeletePushNotificationRegistrationResponse($result->toArray());
    }
}
