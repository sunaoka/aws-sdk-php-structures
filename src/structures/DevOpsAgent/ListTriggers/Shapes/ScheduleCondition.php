<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListTriggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $expression
 * @property ScheduleSpec|null $spec
 */
class ScheduleCondition extends Shape
{
    /**
     * @param array{
     *     expression?: string|null,
     *     spec?: ScheduleSpec|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
