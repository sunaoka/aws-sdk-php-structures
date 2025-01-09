<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PricingPlanArn
 */
class ComputationPreference extends Shape
{
    /**
     * @param array{PricingPlanArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
