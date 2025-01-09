<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NotificationAction> $notificationActions
 */
class AlarmNotification extends Shape
{
    /**
     * @param array{notificationActions?: list<NotificationAction>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
