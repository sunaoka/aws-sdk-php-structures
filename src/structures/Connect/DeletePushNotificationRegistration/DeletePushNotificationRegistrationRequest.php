<?php

namespace Sunaoka\Aws\Structures\Connect\DeletePushNotificationRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RegistrationId
 * @property string $ContactId
 */
class DeletePushNotificationRegistrationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RegistrationId: string,
     *     ContactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
