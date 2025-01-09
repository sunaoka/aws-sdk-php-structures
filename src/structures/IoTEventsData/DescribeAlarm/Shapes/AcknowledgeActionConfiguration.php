<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $note
 */
class AcknowledgeActionConfiguration extends Shape
{
    /**
     * @param array{note?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
