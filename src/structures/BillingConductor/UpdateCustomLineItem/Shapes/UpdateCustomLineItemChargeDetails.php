<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateCustomLineItemFlatChargeDetails $Flat
 * @property UpdateCustomLineItemPercentageChargeDetails $Percentage
 * @property list<LineItemFilter> $LineItemFilters
 */
class UpdateCustomLineItemChargeDetails extends Shape
{
    /**
     * @param array{
     *     Flat?: UpdateCustomLineItemFlatChargeDetails,
     *     Percentage?: UpdateCustomLineItemPercentageChargeDetails,
     *     LineItemFilters?: list<LineItemFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
