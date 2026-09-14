<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreatePricingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateFreeTierConfig|null $FreeTier
 * @property list<CustomTier>|null $CustomTiers
 */
class CreateTieringInput extends Shape
{
    /**
     * @param array{
     *     FreeTier?: CreateFreeTierConfig|null,
     *     CustomTiers?: list<CustomTier>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
