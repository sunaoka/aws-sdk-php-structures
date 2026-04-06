<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserNotificationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NotificationId
 * @property string $UserId
 * @property 'READ'|'UNREAD'|'HIDDEN' $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class UpdateUserNotificationStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NotificationId: string,
     *     UserId: string,
     *     Status: 'READ'|'UNREAD'|'HIDDEN',
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
