<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{ScheduleExpression: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
