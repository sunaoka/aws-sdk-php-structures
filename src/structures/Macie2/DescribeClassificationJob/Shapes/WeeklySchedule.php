<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY' $dayOfWeek
 */
class WeeklySchedule extends Shape
{
    /**
     * @param array{dayOfWeek?: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
