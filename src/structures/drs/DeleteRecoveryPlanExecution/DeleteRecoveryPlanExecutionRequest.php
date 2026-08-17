<?php

namespace Sunaoka\Aws\Structures\drs\DeleteRecoveryPlanExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanExecutionArn
 */
class DeleteRecoveryPlanExecutionRequest extends Request
{
    /**
     * @param array{recoveryPlanExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
