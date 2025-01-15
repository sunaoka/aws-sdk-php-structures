<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STATE_CHANGE'|null $eventType
 * @property StateChangeConfiguration|null $stateChangeConfiguration
 */
class SystemEvent extends Shape
{
    /**
     * @param array{
     *     eventType?: 'STATE_CHANGE'|null,
     *     stateChangeConfiguration?: StateChangeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
