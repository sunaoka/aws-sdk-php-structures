<?php

namespace Sunaoka\Aws\Structures\drs\UpdateRecoveryPlanStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanStepArn
 * @property string|null $stepName
 * @property Shapes\RecoveryPlanStepConfiguration|null $configuration
 */
class UpdateRecoveryPlanStepRequest extends Request
{
    /**
     * @param array{
     *     recoveryPlanStepArn: string,
     *     stepName?: string|null,
     *     configuration?: Shapes\RecoveryPlanStepConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
