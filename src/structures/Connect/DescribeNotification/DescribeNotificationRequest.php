<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NotificationId
 */
class DescribeNotificationRequest extends Request
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
