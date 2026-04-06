<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionActionDefinitionSummary $definition
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property float|null $progressPercent
 * @property string $sessionActionId
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED' $status
 * @property \Aws\Api\DateTimeResult|null $workerUpdatedAt
 */
class SessionActionSummary extends Shape
{
    /**
     * @param array{
     *     definition: SessionActionDefinitionSummary,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     progressPercent?: float|null,
     *     sessionActionId: string,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     status: 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED',
     *     workerUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
