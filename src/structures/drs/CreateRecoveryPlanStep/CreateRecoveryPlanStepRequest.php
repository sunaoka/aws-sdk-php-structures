<?php

namespace Sunaoka\Aws\Structures\drs\CreateRecoveryPlanStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanArn
 * @property string $stepName
 * @property int<1, 20>|null $stepOrder
 * @property Shapes\RecoveryPlanStepConfiguration $configuration
 * @property string|null $clientToken
 */
class CreateRecoveryPlanStepRequest extends Request
{
    /**
     * @param array{
     *     recoveryPlanArn: string,
     *     stepName: string,
     *     stepOrder?: int<1, 20>|null,
     *     configuration: Shapes\RecoveryPlanStepConfiguration,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
