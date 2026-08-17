<?php

namespace Sunaoka\Aws\Structures\drs\StartRecoveryPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recoveryPlanExecutionArn
 * @property string $recoveryPlanArn
 * @property 'DRILL'|'RECOVERY' $mode
 * @property 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property string $startedAt
 * @property string|null $completedAt
 * @property ErrorDetail|null $errorDetail
 * @property array<string, string>|null $tags
 */
class RecoveryPlanExecution extends Shape
{
    /**
     * @param array{
     *     recoveryPlanExecutionArn: string,
     *     recoveryPlanArn: string,
     *     mode: 'DRILL'|'RECOVERY',
     *     status: 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED',
     *     startedAt: string,
     *     completedAt?: string|null,
     *     errorDetail?: ErrorDetail|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
