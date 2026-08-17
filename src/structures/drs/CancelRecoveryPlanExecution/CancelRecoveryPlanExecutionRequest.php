<?php

namespace Sunaoka\Aws\Structures\drs\CancelRecoveryPlanExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanExecutionArn
 */
class CancelRecoveryPlanExecutionRequest extends Request
{
    /**
     * @param array{recoveryPlanExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
