<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationHubs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'REGISTERING'|'DEREGISTERING'|'INACTIVE' $status
 * @property string $reason
 */
class NotificationHubStatusSummary extends Shape
{
    /**
     * @param array{
     *     status: 'ACTIVE'|'REGISTERING'|'DEREGISTERING'|'INACTIVE',
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
