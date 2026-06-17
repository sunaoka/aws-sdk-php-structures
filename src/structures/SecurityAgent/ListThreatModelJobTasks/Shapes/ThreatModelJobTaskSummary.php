<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModelJobTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property string|null $threatModelId
 * @property string|null $threatModelJobId
 * @property string|null $agentSpaceId
 * @property string|null $title
 * @property 'IN_PROGRESS'|'ABORTED'|'COMPLETED'|'INTERNAL_ERROR'|'FAILED'|null $executionStatus
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ThreatModelJobTaskSummary extends Shape
{
    /**
     * @param array{
     *     taskId: string,
     *     threatModelId?: string|null,
     *     threatModelJobId?: string|null,
     *     agentSpaceId?: string|null,
     *     title?: string|null,
     *     executionStatus?: 'IN_PROGRESS'|'ABORTED'|'COMPLETED'|'INTERNAL_ERROR'|'FAILED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
