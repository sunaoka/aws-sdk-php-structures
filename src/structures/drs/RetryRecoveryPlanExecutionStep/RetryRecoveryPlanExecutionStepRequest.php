<?php

namespace Sunaoka\Aws\Structures\drs\RetryRecoveryPlanExecutionStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanExecutionStepArn
 */
class RetryRecoveryPlanExecutionStepRequest extends Request
{
    /**
     * @param array{recoveryPlanExecutionStepArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
