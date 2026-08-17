<?php

namespace Sunaoka\Aws\Structures\drs\DeleteRecoveryPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanArn
 */
class DeleteRecoveryPlanRequest extends Request
{
    /**
     * @param array{recoveryPlanArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
