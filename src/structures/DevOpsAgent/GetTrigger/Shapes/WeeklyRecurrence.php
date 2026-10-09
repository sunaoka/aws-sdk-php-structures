<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $dayOfWeek
 */
class WeeklyRecurrence extends Shape
{
    /**
     * @param array{dayOfWeek: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
