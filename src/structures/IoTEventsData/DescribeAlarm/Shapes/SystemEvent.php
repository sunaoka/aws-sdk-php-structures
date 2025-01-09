<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STATE_CHANGE' $eventType
 * @property StateChangeConfiguration $stateChangeConfiguration
 */
class SystemEvent extends Shape
{
    /**
     * @param array{
     *     eventType?: 'STATE_CHANGE',
     *     stateChangeConfiguration?: StateChangeConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
