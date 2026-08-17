<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recoveryPlanStepArn
 * @property int<1, 20> $stepOrder
 * @property string $stepName
 * @property RecoveryPlanStepConfiguration $configuration
 * @property string $createdAt
 * @property string $updatedAt
 */
class RecoveryPlanStep extends Shape
{
    /**
     * @param array{
     *     recoveryPlanStepArn: string,
     *     stepOrder: int<1, 20>,
     *     stepName: string,
     *     configuration: RecoveryPlanStepConfiguration,
     *     createdAt: string,
     *     updatedAt: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
