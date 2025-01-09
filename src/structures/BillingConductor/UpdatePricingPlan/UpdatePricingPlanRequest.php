<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 */
class UpdatePricingPlanRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
