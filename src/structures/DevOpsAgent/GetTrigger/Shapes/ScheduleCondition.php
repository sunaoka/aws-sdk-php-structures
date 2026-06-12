<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 */
class ScheduleCondition extends Shape
{
    /**
     * @param array{expression: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
