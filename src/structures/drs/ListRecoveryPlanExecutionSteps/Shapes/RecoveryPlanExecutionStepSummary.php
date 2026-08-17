<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recoveryPlanExecutionStepArn
 * @property string $stepName
 * @property int<1, 20> $stepIndex
 * @property 'NOT_STARTED'|'EXECUTING'|'WAITING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'SKIPPED' $status
 * @property RecoveryPlanExecutionStepConfiguration $configuration
 * @property ErrorDetail|null $errorDetail
 */
class RecoveryPlanExecutionStepSummary extends Shape
{
    /**
     * @param array{
     *     recoveryPlanExecutionStepArn: string,
     *     stepName: string,
     *     stepIndex: int<1, 20>,
     *     status: 'NOT_STARTED'|'EXECUTING'|'WAITING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'SKIPPED',
     *     configuration: RecoveryPlanExecutionStepConfiguration,
     *     errorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
