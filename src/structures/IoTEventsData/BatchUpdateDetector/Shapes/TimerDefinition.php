<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchUpdateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $seconds
 */
class TimerDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     seconds: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
