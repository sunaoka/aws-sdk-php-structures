<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NotificationId
 */
class DeleteNotificationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NotificationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
