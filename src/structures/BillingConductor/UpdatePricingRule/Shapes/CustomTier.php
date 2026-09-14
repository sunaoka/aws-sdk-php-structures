<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $BeginRangeInclusive
 * @property double|null $EndRangeExclusive
 * @property double $RateValue
 */
class CustomTier extends Shape
{
    /**
     * @param array{
     *     BeginRangeInclusive: double,
     *     EndRangeExclusive?: double|null,
     *     RateValue: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
