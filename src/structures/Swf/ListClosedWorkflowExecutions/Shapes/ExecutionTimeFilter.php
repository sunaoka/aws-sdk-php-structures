<?php

namespace Sunaoka\Aws\Structures\Swf\ListClosedWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $oldestDate
 * @property \Aws\Api\DateTimeResult $latestDate
 */
class ExecutionTimeFilter extends Shape
{
    /**
     * @param array{
     *     oldestDate: \Aws\Api\DateTimeResult,
     *     latestDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
