<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanExecutionArn
 */
class GetRecoveryPlanExecutionRequest extends Request
{
    /**
     * @param array{recoveryPlanExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
