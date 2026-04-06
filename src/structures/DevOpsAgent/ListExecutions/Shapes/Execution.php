<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 * @property string|null $parentExecutionId
 * @property string $agentSubTask
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'FAILED'|'RUNNING'|'STOPPED'|'CANCELED'|'TIMED_OUT' $executionStatus
 * @property string|null $agentType
 * @property string|null $uid
 */
class Execution extends Shape
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     executionId: string,
     *     parentExecutionId?: string|null,
     *     agentSubTask: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     executionStatus: 'FAILED'|'RUNNING'|'STOPPED'|'CANCELED'|'TIMED_OUT',
     *     agentType?: string|null,
     *     uid?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
