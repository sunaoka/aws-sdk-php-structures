<?php

namespace Sunaoka\Aws\Structures\Connect\ListHoursOfOperationOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecurrencePattern $RecurrencePattern
 */
class RecurrenceConfig extends Shape
{
    /**
     * @param array{RecurrencePattern: RecurrencePattern} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
