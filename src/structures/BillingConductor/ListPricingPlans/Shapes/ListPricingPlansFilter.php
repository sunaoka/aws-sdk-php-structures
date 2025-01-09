<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Arns
 */
class ListPricingPlansFilter extends Shape
{
    /**
     * @param array{Arns?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
