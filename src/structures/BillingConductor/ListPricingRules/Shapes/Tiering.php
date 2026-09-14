<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FreeTierConfig|null $FreeTier
 * @property list<CustomTier>|null $CustomTiers
 */
class Tiering extends Shape
{
    /**
     * @param array{
     *     FreeTier?: FreeTierConfig|null,
     *     CustomTiers?: list<CustomTier>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
