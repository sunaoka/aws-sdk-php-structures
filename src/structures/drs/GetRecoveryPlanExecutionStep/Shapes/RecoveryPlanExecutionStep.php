<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanExecutionStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recoveryPlanExecutionStepArn
 * @property int<1, 20> $stepIndex
 * @property 'NOT_STARTED'|'EXECUTING'|'WAITING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'SKIPPED' $status
 * @property string $stepName
 * @property RecoveryPlanExecutionStepConfiguration $configuration
 * @property ErrorDetail|null $errorDetail
 * @property int<1, max> $attempt
 * @property string $createdAt
 * @property string $updatedAt
 */
class RecoveryPlanExecutionStep extends Shape
{
    /**
     * @param array{
     *     recoveryPlanExecutionStepArn: string,
     *     stepIndex: int<1, 20>,
     *     status: 'NOT_STARTED'|'EXECUTING'|'WAITING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'SKIPPED',
     *     stepName: string,
     *     configuration: RecoveryPlanExecutionStepConfiguration,
     *     errorDetail?: ErrorDetail|null,
     *     attempt: int<1, max>,
     *     createdAt: string,
     *     updatedAt: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
