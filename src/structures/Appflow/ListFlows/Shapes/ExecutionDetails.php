<?php

namespace Sunaoka\Aws\Structures\Appflow\ListFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mostRecentExecutionMessage
 * @property \Aws\Api\DateTimeResult $mostRecentExecutionTime
 * @property 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled' $mostRecentExecutionStatus
 */
class ExecutionDetails extends Shape
{
    /**
     * @param array{
     *     mostRecentExecutionMessage?: string,
     *     mostRecentExecutionTime?: \Aws\Api\DateTimeResult,
     *     mostRecentExecutionStatus?: 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
