<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $dayOfMonth
 */
class MonthlySchedule extends Shape
{
    /**
     * @param array{dayOfMonth?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
