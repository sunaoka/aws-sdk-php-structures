<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateFreeTierConfig $FreeTier
 */
class UpdateTieringInput extends Shape
{
    /**
     * @param array{FreeTier: UpdateFreeTierConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
