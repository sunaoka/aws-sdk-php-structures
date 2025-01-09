<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomLineItemFlatChargeDetails $Flat
 * @property CustomLineItemPercentageChargeDetails $Percentage
 * @property 'CREDIT'|'FEE' $Type
 * @property list<LineItemFilter> $LineItemFilters
 */
class CustomLineItemChargeDetails extends Shape
{
    /**
     * @param array{
     *     Flat?: CustomLineItemFlatChargeDetails,
     *     Percentage?: CustomLineItemPercentageChargeDetails,
     *     Type: 'CREDIT'|'FEE',
     *     LineItemFilters?: list<LineItemFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
