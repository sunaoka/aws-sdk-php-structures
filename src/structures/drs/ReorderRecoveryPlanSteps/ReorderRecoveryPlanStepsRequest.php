<?php

namespace Sunaoka\Aws\Structures\drs\ReorderRecoveryPlanSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanArn
 * @property list<string> $orderedStepArns
 */
class ReorderRecoveryPlanStepsRequest extends Request
{
    /**
     * @param array{
     *     recoveryPlanArn: string,
     *     orderedStepArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
