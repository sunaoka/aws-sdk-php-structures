<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionActionId
 * @property 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property \Aws\Api\DateTimeResult $workerUpdatedAt
 * @property float $progressPercent
 * @property SessionActionDefinitionSummary $definition
 */
class SessionActionSummary extends Shape
{
    /**
     * @param array{
     *     sessionActionId: string,
     *     status: 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED',
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult,
     *     workerUpdatedAt?: \Aws\Api\DateTimeResult,
     *     progressPercent?: float,
     *     definition: SessionActionDefinitionSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
