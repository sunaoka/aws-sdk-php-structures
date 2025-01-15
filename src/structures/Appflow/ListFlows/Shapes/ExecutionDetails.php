<?php

namespace Sunaoka\Aws\Structures\Appflow\ListFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $mostRecentExecutionMessage
 * @property \Aws\Api\DateTimeResult|null $mostRecentExecutionTime
 * @property 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled'|null $mostRecentExecutionStatus
 */
class ExecutionDetails extends Shape
{
    /**
     * @param array{
     *     mostRecentExecutionMessage?: string|null,
     *     mostRecentExecutionTime?: \Aws\Api\DateTimeResult|null,
     *     mostRecentExecutionStatus?: 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
