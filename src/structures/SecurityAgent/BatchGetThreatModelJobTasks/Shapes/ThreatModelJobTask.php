<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModelJobTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property string|null $threatModelId
 * @property string|null $threatModelJobId
 * @property string|null $agentSpaceId
 * @property string|null $title
 * @property string|null $description
 * @property 'IN_PROGRESS'|'ABORTED'|'COMPLETED'|'INTERNAL_ERROR'|'FAILED'|null $executionStatus
 * @property LogLocation|null $logsLocation
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ThreatModelJobTask extends Shape
{
    /**
     * @param array{
     *     taskId: string,
     *     threatModelId?: string|null,
     *     threatModelJobId?: string|null,
     *     agentSpaceId?: string|null,
     *     title?: string|null,
     *     description?: string|null,
     *     executionStatus?: 'IN_PROGRESS'|'ABORTED'|'COMPLETED'|'INTERNAL_ERROR'|'FAILED'|null,
     *     logsLocation?: LogLocation|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
