<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recoveryPlanExecutionArn
 * @property string $recoveryPlanArn
 * @property 'DRILL'|'RECOVERY' $mode
 * @property 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property string $startedAt
 * @property ErrorDetail|null $errorDetail
 */
class RecoveryPlanExecutionSummary extends Shape
{
    /**
     * @param array{
     *     recoveryPlanExecutionArn: string,
     *     recoveryPlanArn: string,
     *     mode: 'DRILL'|'RECOVERY',
     *     status: 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED',
     *     startedAt: string,
     *     errorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
