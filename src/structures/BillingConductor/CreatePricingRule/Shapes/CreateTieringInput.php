<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreatePricingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateFreeTierConfig $FreeTier
 */
class CreateTieringInput extends Shape
{
    /**
     * @param array{FreeTier: CreateFreeTierConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
