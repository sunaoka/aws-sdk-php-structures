<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanStepArn
 */
class GetRecoveryPlanStepRequest extends Request
{
    /**
     * @param array{recoveryPlanStepArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
