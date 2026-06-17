<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModelJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $threatModelJobId
 * @property string $threatModelId
 * @property string|null $agentSpaceId
 * @property string|null $title
 * @property 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ThreatModelJobSummary extends Shape
{
    /**
     * @param array{
     *     threatModelJobId: string,
     *     threatModelId: string,
     *     agentSpaceId?: string|null,
     *     title?: string|null,
     *     status?: 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
