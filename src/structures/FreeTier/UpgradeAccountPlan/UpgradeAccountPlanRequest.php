<?php

namespace Sunaoka\Aws\Structures\FreeTier\UpgradeAccountPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'FREE'|'PAID' $accountPlanType
 */
class UpgradeAccountPlanRequest extends Request
{
    /**
     * @param array{accountPlanType: 'FREE'|'PAID'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
