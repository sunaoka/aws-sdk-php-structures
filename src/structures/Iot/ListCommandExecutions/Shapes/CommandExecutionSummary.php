<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommandExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $commandArn
 * @property string $executionId
 * @property string $targetArn
 * @property 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $completedAt
 */
class CommandExecutionSummary extends Shape
{
    /**
     * @param array{
     *     commandArn?: string,
     *     executionId?: string,
     *     targetArn?: string,
     *     status?: 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     completedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
