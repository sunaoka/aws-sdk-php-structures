<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DeletePricingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeletePricingPlanRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
