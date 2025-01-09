<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timeInMillis
 */
class TimestampValue extends Shape
{
    /**
     * @param array{timeInMillis?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
