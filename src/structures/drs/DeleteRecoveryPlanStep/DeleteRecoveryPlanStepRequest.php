<?php

namespace Sunaoka\Aws\Structures\drs\DeleteRecoveryPlanStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanStepArn
 */
class DeleteRecoveryPlanStepRequest extends Request
{
    /**
     * @param array{recoveryPlanStepArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
