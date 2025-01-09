<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SNOOZE_TIMEOUT' $triggerType
 */
class StateChangeConfiguration extends Shape
{
    /**
     * @param array{triggerType?: 'SNOOZE_TIMEOUT'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
