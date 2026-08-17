<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanExecutionStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanExecutionStepArn
 */
class GetRecoveryPlanExecutionStepRequest extends Request
{
    /**
     * @param array{recoveryPlanExecutionStepArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
