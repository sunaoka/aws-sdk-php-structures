<?php

namespace Sunaoka\Aws\Structures\Swf\ListOpenWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $oldestDate
 * @property \Aws\Api\DateTimeResult|null $latestDate
 */
class ExecutionTimeFilter extends Shape
{
    /**
     * @param array{
     *     oldestDate: \Aws\Api\DateTimeResult,
     *     latestDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
