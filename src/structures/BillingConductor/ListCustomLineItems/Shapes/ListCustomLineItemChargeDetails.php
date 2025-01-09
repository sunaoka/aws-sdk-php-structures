<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListCustomLineItemFlatChargeDetails $Flat
 * @property ListCustomLineItemPercentageChargeDetails $Percentage
 * @property 'CREDIT'|'FEE' $Type
 * @property list<LineItemFilter> $LineItemFilters
 */
class ListCustomLineItemChargeDetails extends Shape
{
    /**
     * @param array{
     *     Flat?: ListCustomLineItemFlatChargeDetails,
     *     Percentage?: ListCustomLineItemPercentageChargeDetails,
     *     Type: 'CREDIT'|'FEE',
     *     LineItemFilters?: list<LineItemFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
