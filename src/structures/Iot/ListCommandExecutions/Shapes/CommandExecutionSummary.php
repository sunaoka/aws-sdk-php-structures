<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommandExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $commandArn
 * @property string|null $executionId
 * @property string|null $targetArn
 * @property 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class CommandExecutionSummary extends Shape
{
    /**
     * @param array{
     *     commandArn?: string|null,
     *     executionId?: string|null,
     *     targetArn?: string|null,
     *     status?: 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
