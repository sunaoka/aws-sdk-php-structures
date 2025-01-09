<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItemVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListCustomLineItemVersionsBillingPeriodRangeFilter $BillingPeriodRange
 */
class ListCustomLineItemVersionsFilter extends Shape
{
    /**
     * @param array{BillingPeriodRange?: ListCustomLineItemVersionsBillingPeriodRangeFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
