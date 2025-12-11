<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CronExpression
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{CronExpression?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
