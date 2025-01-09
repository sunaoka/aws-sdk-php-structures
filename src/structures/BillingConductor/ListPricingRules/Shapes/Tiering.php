<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FreeTierConfig $FreeTier
 */
class Tiering extends Shape
{
    /**
     * @param array{FreeTier: FreeTierConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
