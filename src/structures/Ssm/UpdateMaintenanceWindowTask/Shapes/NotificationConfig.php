<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NotificationArn
 * @property list<'All'|'InProgress'|'Success'|'TimedOut'|'Cancelled'|'Failed'>|null $NotificationEvents
 * @property 'Command'|'Invocation'|null $NotificationType
 */
class NotificationConfig extends Shape
{
    /**
     * @param array{
     *     NotificationArn?: string|null,
     *     NotificationEvents?: list<'All'|'InProgress'|'Success'|'TimedOut'|'Cancelled'|'Failed'>|null,
     *     NotificationType?: 'Command'|'Invocation'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
