<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateFreeTierConfig|null $FreeTier
 * @property list<CustomTier>|null $CustomTiers
 */
class UpdateTieringInput extends Shape
{
    /**
     * @param array{
     *     FreeTier?: UpdateFreeTierConfig|null,
     *     CustomTiers?: list<CustomTier>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
