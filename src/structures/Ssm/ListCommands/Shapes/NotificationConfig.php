<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NotificationArn
 * @property list<'All'|'InProgress'|'Success'|'TimedOut'|'Cancelled'|'Failed'> $NotificationEvents
 * @property 'Command'|'Invocation' $NotificationType
 */
class NotificationConfig extends Shape
{
    /**
     * @param array{
     *     NotificationArn?: string,
     *     NotificationEvents?: list<'All'|'InProgress'|'Success'|'TimedOut'|'Cancelled'|'Failed'>,
     *     NotificationType?: 'Command'|'Invocation'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
