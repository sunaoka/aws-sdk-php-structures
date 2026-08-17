<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanArn
 */
class GetRecoveryPlanRequest extends Request
{
    /**
     * @param array{recoveryPlanArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
