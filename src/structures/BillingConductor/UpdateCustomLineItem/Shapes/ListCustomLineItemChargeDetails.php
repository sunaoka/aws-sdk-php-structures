<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListCustomLineItemFlatChargeDetails|null $Flat
 * @property ListCustomLineItemPercentageChargeDetails|null $Percentage
 * @property 'CREDIT'|'FEE' $Type
 * @property list<LineItemFilter>|null $LineItemFilters
 */
class ListCustomLineItemChargeDetails extends Shape
{
    /**
     * @param array{
     *     Flat?: ListCustomLineItemFlatChargeDetails|null,
     *     Percentage?: ListCustomLineItemPercentageChargeDetails|null,
     *     Type: 'CREDIT'|'FEE',
     *     LineItemFilters?: list<LineItemFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
