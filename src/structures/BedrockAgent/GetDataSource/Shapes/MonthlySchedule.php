<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DayOfMonth $dayOfMonth
 */
class MonthlySchedule extends Shape
{
    /**
     * @param array{dayOfMonth: DayOfMonth} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
